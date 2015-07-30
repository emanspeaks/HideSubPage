<!-- README -->

== What? ==

The HideSubPage extension hides the parent page titles in subpage titles.

For example, page 'Help/FAQ' normally has the 'Help/FAQ' title. If this
extension is enabled, visible page title will be just 'FAQ' without the 'Help/' title.

== Why? ==

When subpages are buried deep in a hierarchy, the page titles can get extremely lengthy.  This makes it look cleaner by hiding the parent pages in the title.  The links to the parent pages will still be available in the breadcrumb nav underneath the title, so they are not necessary to qualify in the H1 text of the header.

== Download ==

Clone from GitHub at https://github.com/emanspeaks/HideSubPage

== Installation ==

To install this extension, add the following to LocalSettings.php:

 require_once( "$IP/extensions/HideSubPage/HideSubPage.php" );

== License ==

GNU Affero General Public License, version 3 or any later version. See AGPL-3.0.txt file for the
full license text.

== See also ==

*   Extension HidePrefix - HideSubPage started as a fork of this extension.

== Links ==

* License page:   https://www.gnu.org/licenses/agpl.html

<!-- end of file -->
