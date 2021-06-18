import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import Command from '@ckeditor/ckeditor5-core/src/command';

import checkIcon from '@ckeditor/ckeditor5-core/theme/icons/check.svg';
import cancelIcon from '@ckeditor/ckeditor5-core/theme/icons/cancel.svg';
import pencilIcon from '@ckeditor/ckeditor5-core/theme/icons/pencil.svg';

import View from '@ckeditor/ckeditor5-ui/src/view';
import Model from '@ckeditor/ckeditor5-ui/src/model';
import ViewCollection from '@ckeditor/ckeditor5-ui/src/viewcollection';
import ButtonView from '@ckeditor/ckeditor5-ui/src/button/buttonview';
import { createDropdown, addListToDropdown } from '@ckeditor/ckeditor5-ui/src/dropdown/utils';
import * as labeledfieldUtils from '@ckeditor/ckeditor5-ui/src/labeledfield/utils';
import LabeledFieldView from '@ckeditor/ckeditor5-ui/src/labeledfield/labeledfieldview';
import FocusCycler from '@ckeditor/ckeditor5-ui/src/focuscycler';
import ContextualBalloon from '@ckeditor/ckeditor5-ui/src/panel/balloon/contextualballoon';
import bindingsSubmitHandler from '@ckeditor/ckeditor5-ui/src/bindings/submithandler';
import bindingsClickoutsidehandler from '@ckeditor/ckeditor5-ui/src/bindings/clickoutsidehandler';

import Widget from '@ckeditor/ckeditor5-widget/src/widget';
import { toWidget, toWidgetEditable, findOptimalInsertionPosition } from '@ckeditor/ckeditor5-widget/src/utils';

import Collection from '@ckeditor/ckeditor5-utils/src/collection';
import FocusTracker from '@ckeditor/ckeditor5-utils/src/focustracker';
import KeystrokeHandler from '@ckeditor/ckeditor5-utils/src/keystrokehandler';
import toMap from '@ckeditor/ckeditor5-utils/src/tomap';

import LiveRange from '@ckeditor/ckeditor5-engine/src/model/liverange';
import DomConverter from '@ckeditor/ckeditor5-engine/src/view/domconverter';
import HtmlDataProcessor from '@ckeditor/ckeditor5-engine/src/dataprocessor/htmldataprocessor';

import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
import HtmlEmbed from '@ckeditor/ckeditor5-html-embed/src/htmlembed';

import RemoveFormat from '@ckeditor/ckeditor5-remove-format/src/removeformat';

import Autoformat from '@ckeditor/ckeditor5-autoformat/src/autoformat';
import BlockAutoformatEditing from '@ckeditor/ckeditor5-autoformat/src/blockautoformatediting';

import Underline from '@ckeditor/ckeditor5-basic-styles/src/underline';
import Strikethrough from '@ckeditor/ckeditor5-basic-styles/src/strikethrough';
import Code from '@ckeditor/ckeditor5-basic-styles/src/code';

import HorizontalLine from '@ckeditor/ckeditor5-horizontal-line/src/horizontalline';

import EasyImage from '@ckeditor/ckeditor5-easy-image/src/easyimage';

import Image from '@ckeditor/ckeditor5-image/src/image';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
import UploadImageCommand from '@ckeditor/ckeditor5-image/src/imageupload/uploadimagecommand';
import * as imageUtils from '@ckeditor/ckeditor5-image/src/image/utils';
import * as imageUiUtils from '@ckeditor/ckeditor5-image/src/image/ui/utils';

import LinkImage from '@ckeditor/ckeditor5-link/src/linkimage';
import LinkCommand from '@ckeditor/ckeditor5-link/src/linkcommand';
import UnlinkCommand from '@ckeditor/ckeditor5-link/src/unlinkcommand';
import findAttributeRange from '@ckeditor/ckeditor5-typing/src/utils/findattributerange';

import TableProperties from '@ckeditor/ckeditor5-table/src/tableproperties';
import TableCellProperties from '@ckeditor/ckeditor5-table/src/tablecellproperties';
import TableCellPropertiesUI from '@ckeditor/ckeditor5-table/src/tablecellproperties/tablecellpropertiesui';

import TextTransformation from '@ckeditor/ckeditor5-typing/src/texttransformation';

import CodeBlock from '@ckeditor/ckeditor5-code-block/src/codeblock';
import WordCount from '@ckeditor/ckeditor5-word-count/src/wordcount';

export default function( ClassicEditor ) {
	ClassicEditor.builtinPlugins.filter( plugin => {
		return [
			EasyImage,
			ImageCaption,
			ImageStyle,
			TableProperties
		].indexOf( plugin ) === -1;
	} );

	ClassicEditor.builtinPlugins.push(
		RemoveFormat,
		Code,
		CodeBlock,
		HtmlEmbed,
		HorizontalLine,
		LinkImage,
		Strikethrough,
		TableCellProperties,
		TextTransformation,
		Underline,
		WordCount
	);

	// eslint-disable-next-line no-undef
	window.nextgenEditor = {
		classes: {
			autoformat: {
				class: Autoformat,
				blockautoformatediting: {
					class: BlockAutoformatEditing
				}
			},
			ClassicEditor,
			core: {
				command: {
					class: Command
				},
				plugin: {
					class: Plugin
				},
				theme: {
					icons: {
						check: checkIcon,
						cancel: cancelIcon,
						pencil: pencilIcon
					}
				}
			},
			engine: {
				model: {
					liverange: {
						class: LiveRange
					}
				},
				view: {
					domconverter: {
						class: DomConverter
					}
				},
				dataprocessor: {
					htmldataprocessor: {
						class: HtmlDataProcessor
					}
				}
			},
			essentials: {
				class: Essentials
			},
			removeFormat: {
				class: RemoveFormat
			},
			htmlEmbed: {
				class: HtmlEmbed
			},
			image: {
				class: Image,
				imageupload: {
					imageuploadcommand: {
						class: UploadImageCommand
					}
				},
				utils: imageUtils,
				ui: {
					utils: imageUiUtils
				}
			},
			link: {
				linkcommand: {
					class: LinkCommand
				},
				unlinkcommand: {
					class: UnlinkCommand
				},
				findAttributeRange
			},
			table: {
				tablecellproperties: {
					tablecellpropertiesui: {
						class: TableCellPropertiesUI
					}
				}
			},
			ui: {
				bindings: {
					submithandler: bindingsSubmitHandler,
					clickoutsidehandler: bindingsClickoutsidehandler
				},
				button: {
					buttonview: {
						class: ButtonView
					}
				},
				dropdown: {
					utils: {
						addListToDropdown,
						createDropdown
					}
				},
				focuscycler: {
					class: FocusCycler
				},
				labeledfield: {
					labeledfieldview: {
						class: LabeledFieldView
					},
					utils: labeledfieldUtils
				},
				model: {
					class: Model
				},
				panel: {
					balloon: {
						contextualballoon: {
							class: ContextualBalloon
						}
					}
				},
				view: {
					class: View
				},
				viewcollection: {
					class: ViewCollection
				}
			},
			utils: {
				collection: {
					class: Collection
				},
				focustracker: {
					class: FocusTracker
				},
				keystrokehandler: {
					class: KeystrokeHandler
				},
				tomap: toMap
			},
			widget: {
				class: Widget,
				utils: {
					toWidget,
					toWidgetEditable,
					findOptimalInsertionPosition,
				}
			}
		}
	};
}
