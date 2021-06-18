# v1.1.3
## 06/02/2021

1. [](#improved)
   * It is now possible to add new custom code block languages on top of the built-in ones (plaintext, bash, c, cs, cpp, css, diff, html, java, javascript, json, php, python, ruby, sh, typescript, xml, yaml).
1. [](#bugfix)
   * Fixed double scrollbar in Code Block dropdown menu

# v1.1.2
## 05/07/2021

1. [](#bugfix)
   * Fixed issue with media sources URIs containing a fragment in the query and wrongly getting parsed by Grav [getgrav/grav-premium-issues#95](https://github.com/getgrav/grav-premium-issues/issues/95)

# v1.1.1
## 04/29/2021

1. [](#improved)
   * Added `mark` to the list of allowed inline tags and to preserve [getgrav/grav-premium-issues#92](https://github.com/getgrav/grav-premium-issues/issues/92)

# v1.1.0
## 04/27/2021

1. [](#new)
   * Added ability to define custom Media Embed Providers ([see documentation](https://getgrav.org/premium/nextgen-editor/docs#media-embed-providers)) [getgrav/grav-premium-issues#89](https://github.com/getgrav/grav-premium-issues/issues/89)
1. [](#improved)
   * Updated from CK5 v27 to v27.1
   * Added better support for [CK5 Media Embed](https://ckeditor.com/docs/ckeditor5/latest/features/media-embed.html#displaying-embedded-media-on-your-website) feature.
1. [](#bugfix)
   * Fixed case where missing options would throw a JS error
   * Better support for new non-paragraph lines (SHIFT + RETURN). They will now be converted to proper double-space markdown lines [getgrav/grav-premium-issues#93](https://github.com/getgrav/grav-premium-issues/issues/93)

# v1.0.8
## 04/19/2021

1. [](#bugfix)
   * Proper fix for edge-case with non-breaking space from v1.0.7, only applying the fix once (oops!) [getgrav/grav-premium-issues#32](https://github.com/getgrav/grav-premium-issues/issues/32)

# v1.0.7
## 04/19/2021

1. [](#improved)
   * Better dynamic minimum height for the Editor.
   * Upgraded from CK5 v25 to v27 which brings many enhancements, bugs fixes and security fixes. Worth noticing:
   * Enhanced drag & drop of content from outside the editor (including textual content from applications, widgets and HTML)
   * Drag & drop for reordering content as well as adding new one, within the editor, has a better indicator of where the content will end up in
   * Better handling of large content when formatting
   * Security fixes with Markdown GFM
   * The Ctrl key is now translated to Cmd on macOS to avoid conflicts with some macOS keyboard shortcuts
1. [](#bugfix)
   * Fixed edge-case where Non-breaking Space Transformations option would not properly convert to empty space, preventing certain combinations of markdown and shortcodes to work together (ie, `## [fa icon="grav" /] Title`) [getgrav/grav-premium-issues#32](https://github.com/getgrav/grav-premium-issues/issues/32)

# v1.0.6
## 01/29/2021

1. [](#bugfix)
   * Fixed way of retrieving page routing for Media Picker
   * Fixed settings popup position when close to the bottom of the page [getgrav/grav-premium-issues#23](https://github.com/getgrav/grav-premium-issues/issues/23)

# v1.0.5
## 01/22/2021

1. [](#new)
   * Added new setting to preserve non-breaking spaces [getgrav/grav-premium-issues#19](https://github.com/getgrav/grav-premium-issues/issues/19)
   * Added support for labels in `markdow` type [getgrav/grav-premium-issues#17](https://github.com/getgrav/grav-premium-issues/issues/17)

# v1.0.4
## 01/21/2021

1. [](#bugfix)
   * Fixed issue preventing editor to load when using custom Admin routes

# v1.0.3
## 01/15/2021

1. [](#new)
   * Added new `Remove Format` toolbar button to clear any formatted text that is selected
   * Added new `HTML Snippet` toolbar button, available as **Insert HTML** that will allow to store/restore and edit HTML snippet without having them being treated as Markdown
   * Added global setting `Show HTML Embed Previews` to allow previewing the new HTML Snippets feature. Code will show by default.
   * Added settings for a variety of Automatic Text Transformations (typography, quotes, symbols, mathematical and custom).
1. [](#improved)
   * Updated libraries to their latest versions
1. [](#bugfix)
   * Fixed links where _unlinking_ them would not properly remove the link
   * Fixed Page Picker, wrapping the selection with an unnecessary span

# v1.0.2
## 12/20/2020

1. [](#bugfix)
    * Fixed regression in Grav 1.6 preventing Page Picker to load

# v1.0.1
## 12/18/2020

1. [](#improved)
    * Improved PagePicker module to restore the path value (used by PageInject)

# v1.0.0
## 12/09/2020

1. [](#new)
    * Initial Release
