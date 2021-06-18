import { imageRegexp } from '../image';
import { videoRegexp } from '../video';

const LinkCommand = window.nextgenEditor.classes.link.linkcommand.class;
const UnlinkCommand = window.nextgenEditor.classes.link.unlinkcommand.class;
const { findAttributeRange } = window.nextgenEditor.classes.link;
const toMap = window.nextgenEditor.classes.utils.tomap;

window.nextgenEditor.addHook('hookImageBeforeUrlConvert', (url) => {
  let newUrl = url;

  if (!/(\?|&)link/.test(url) && !imageRegexp.test(url) && !videoRegexp.test(url)) {
    const suffix = !url.includes('?') ? '?link' : '&link';
    newUrl = `${url}${suffix}`;
  }

  return newUrl;
});

window.nextgenEditor.addPlugin('GravLink', {
  init() {
    this.editor.conversion.for('downcast').add((dispatcher) => {
      dispatcher.on('attribute:data-href:image', (evt, data, conversionApi) => {
        const viewFigure = conversionApi.mapper.toViewElement(data.item);
        const viewLink = Array.from(viewFigure.getChildren()).find((child) => child.name === 'a');

        conversionApi.writer.setAttribute('data-href', data.attributeNewValue, viewLink);
      });
    });
  },
});

LinkCommand.prototype.refresh = function refresh() {
  const { model } = this.editor;
  const doc = model.document;

  const selectedElement = doc.selection.getSelectedElement();

  // A check for the `LinkImage` plugin. If the selection contains an element, get values from the element.
  // Currently the selection reads attributes from text nodes only. See #7429 and #7465.
  if (selectedElement && selectedElement.is('image') && model.schema.checkAttribute('image', 'linkHref')) {
    this.value = selectedElement.getAttribute('linkHref');
    this.isEnabled = model.schema.checkAttribute(selectedElement, 'linkHref');
  } else {
    this.value = doc.selection.getAttribute('linkHref');
    this.isEnabled = model.schema.checkAttributeInSelection(doc.selection, 'linkHref');
  }

  // eslint-disable-next-line no-restricted-syntax
  for (const manualDecorator of this.manualDecorators) {
    // eslint-disable-next-line no-underscore-dangle
    manualDecorator.value = this._getDecoratorStateFromModel(manualDecorator.id);
  }

  const aDataHref = selectedElement && selectedElement.is('image') && model.schema.checkAttribute('image', 'linkHref')
    ? selectedElement.getAttribute('data-href')
    : doc.selection.getAttribute('data-href');

  if (aDataHref) {
    this.value = aDataHref;
  }
};

LinkCommand.prototype.execute = async function execute(href, manualDecoratorIds = {}) {
  const body = new FormData();
  const aLink = `<a href="${href}"></a>`;
  let aDataHref = href;

  body.append('route', btoa(`/${window.GravAdmin.config.route}`));
  body.append('data', JSON.stringify({ a: [aLink] }));

  const res = await fetch(`${window.GravAdmin.config.base_url_relative}/action:convertUrls/admin-nonce:${window.GravAdmin.config.admin_nonce}`, { body, method: 'POST' })
    .then((resp) => (resp.ok ? resp.json() : null));

  if (res && res.status === 'success') {
    const link = new DOMParser().parseFromString(res.data.links[aLink], 'text/html').body.firstChild;

    // eslint-disable-next-line no-param-reassign
    href = link.getAttribute('href');
    aDataHref = link.getAttribute('data-href');
  }

  /* eslint-disable */
  const model = this.editor.model;
  const selection = model.document.selection;
  // Stores information about manual decorators to turn them on/off when command is applied.
  const truthyManualDecorators = [];
  const falsyManualDecorators = [];

  for ( const name in manualDecoratorIds ) {
    if ( manualDecoratorIds[ name ] ) {
      truthyManualDecorators.push( name );
    } else {
      falsyManualDecorators.push( name );
    }
  }

  model.change( writer => {
    // If selection is collapsed then update selected link or insert new one at the place of caret.
    if ( selection.isCollapsed ) {
      const position = selection.getFirstPosition();

      // When selection is inside text with `linkHref` attribute.
      if ( selection.hasAttribute( 'linkHref' ) ) {
        // Then update `linkHref` value.
        const linkRange = findAttributeRange( position, 'linkHref', selection.getAttribute( 'linkHref' ), model );

        writer.setAttribute( 'linkHref', href, linkRange );
        writer.setAttribute( 'data-href', aDataHref, linkRange );

        truthyManualDecorators.forEach( item => {
          writer.setAttribute( item, true, linkRange );
        } );

        falsyManualDecorators.forEach( item => {
          writer.removeAttribute( item, linkRange );
        } );

        // Put the selection at the end of the updated link.
        writer.setSelection( writer.createPositionAfter( linkRange.end.nodeBefore ) );
      }
      // If not then insert text node with `linkHref` attribute in place of caret.
      // However, since selection in collapsed, attribute value will be used as data for text node.
      // So, if `href` is empty, do not create text node.
      else if ( href !== '' ) {
        const attributes = toMap( selection.getAttributes() );

        attributes.set( 'linkHref', href );
        attributes.set( 'data-href', aDataHref );

        truthyManualDecorators.forEach( item => {
          attributes.set( item, true );
        } );

        const { end: positionAfter } = model.insertContent( writer.createText( href, attributes ), position );

        // Put the selection at the end of the inserted link.
        // Using end of range returned from insertContent in case nodes with the same attributes got merged.
        writer.setSelection( positionAfter );
      }

      // Remove the `linkHref` attribute and all link decorators from the selection.
      // It stops adding a new content into the link element.
//      [ 'linkHref', ...truthyManualDecorators, ...falsyManualDecorators ].forEach( item => {
//        writer.removeSelectionAttribute( item );
//      } );
    } else {
      // If selection has non-collapsed ranges, we change attribute on nodes inside those ranges
      // omitting nodes where the `linkHref` attribute is disallowed.
      const ranges = model.schema.getValidRanges( selection.getRanges(), 'linkHref' );

      // But for the first, check whether the `linkHref` attribute is allowed on selected blocks (e.g. the "image" element).
      const allowedRanges = [];

      for ( const element of selection.getSelectedBlocks() ) {
        if ( model.schema.checkAttribute( element, 'linkHref' ) ) {
          allowedRanges.push( writer.createRangeOn( element ) );
        }
      }

      // Ranges that accept the `linkHref` attribute. Since we will iterate over `allowedRanges`, let's clone it.
      const rangesToUpdate = allowedRanges.slice();

      // For all selection ranges we want to check whether given range is inside an element that accepts the `linkHref` attribute.
      // If so, we don't want to propagate applying the attribute to its children.
      for ( const range of ranges ) {
        if ( this._isRangeToUpdate( range, allowedRanges ) ) {
          rangesToUpdate.push( range );
        }
      }

      for ( const range of rangesToUpdate ) {
        writer.setAttribute( 'linkHref', href, range );
        writer.setAttribute( 'data-href', aDataHref, range );

        truthyManualDecorators.forEach( item => {
          writer.setAttribute( item, true, range );
        } );

        falsyManualDecorators.forEach( item => {
          writer.removeAttribute( item, range );
        } );
      }
    }
  } );
  /* eslint-enable */
};

UnlinkCommand.prototype.execute = function execute() {
  const { editor } = this;
  const { model } = editor;
  const { selection } = model.document;
  const linkCommand = editor.commands.get('link');

  model.change((writer) => {
    // Get ranges to unlink.
    const rangesToUnlink = selection.isCollapsed
      ? [findAttributeRange(
        selection.getFirstPosition(),
        'linkHref',
        selection.getAttribute('linkHref'),
        model,
      )]
      : model.schema.getValidRanges(selection.getRanges(), 'linkHref');

    // Remove `linkHref` attribute from specified ranges.
    for (const range of rangesToUnlink) {
      writer.removeAttribute('linkHref', range);
      writer.removeAttribute('data-href', range);
      // If there are registered custom attributes, then remove them during unlink.
      if (linkCommand) {
        for (const manualDecorator of linkCommand.manualDecorators) {
          writer.removeAttribute(manualDecorator.id, range);
        }
      }
    }
  });
};
