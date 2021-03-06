<?php // HideSubPage.class.php //

/*
	------------------------------------------------------------------------------------------------
	HideSubPage, a MediaWiki extension for hiding the parent page titles in subpage titles.

	This program is free software: you can redistribute it and/or modify it under the terms
	of the GNU Affero General Public License as published by the Free Software Foundation,
	either version 3 of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
	without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU Affero General Public License for more details.

	You should have received a copy of the GNU Affero General Public License along with this
	program.  If not, see <https://www.gnu.org/licenses/>.
	------------------------------------------------------------------------------------------------
*/

if ( ! defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}; // if

class HideSubPage {

/*
	// Hide prefix in links.
	static public function onLinkBegin( $skin, $target, &$text, &$customAttribs, &$query, &$options, &$ret ) {
		if ( isset( $text ) ) {
			// Hmm... Sometimes `$text' is not a string but an object of class `Message'...
			if ( is_string( $text ) ) {
				$title = Title::newFromText( $text );
				if ( $title != null && $title->getPrefixedText() == $target->getPrefixedText() ) {
					$text = $target->getText();
				}; // if
			}; // if
		} else {
			$text = $target->getText();
		}; // if
		return true;
	} // function onLinkBegin
*/

	// Hide prefix in page title.
	static function onBeforePageDisplay( &$out, &$sk ) {

		if ( ! $out->isArticle() ) {
			return true;
		}; // if
		$title = $out->getTitle();
		if ( ! $title instanceof Title ) {
			return true;
		}; // if

		if ( $title->getNamespace() == NS_MAIN ) {
			$out->setPageTitle( $title->getSubpageText() );
		}; // if

		return true;

	} // function onBeforePageDisplay


} // class HideSubPage

// end of file //
