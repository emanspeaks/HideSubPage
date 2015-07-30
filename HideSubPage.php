<?php // HideSubPage.php //

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

$extHideSubPageDir = defined( __DIR__ ) ? __DIR__ : dirname( __FILE__ ) ;

global $wgAutoloadClasses;
$wgAutoloadClasses[ 'HideSubPage' ] = $extHidePrefixDir . '/HideSubPage.class.php';

global $wgHooks;
//$wgHooks[ 'LinkBegin'         ][] = 'HidePrefix::onLinkBegin';
$wgHooks[ 'BeforePageDisplay' ][] = 'HideSubPage::onBeforePageDisplay';

//global $wgMessagesDirs;
//$wgMessagesDirs['HidePrefix'] = __DIR__ . '/i18n';
//global $wgExtensionMessagesFiles;
//$wgExtensionMessagesFiles[ 'HidePrefix' ] = $extHidePrefixDir . '/HidePrefix.i18n.php';

global $wgExtensionCredits;
$wgExtensionCredits[ 'other' ][] = array(
	'path'    => __FILE__,
	'name'    => 'HideSubPage',
	'license' => 'AGPLv3',
	'version' => '0.1',
	'author'  => 'Randy Eckman'
	'url'     => 'https://github.com/emanspeaks/HideSubPage',
	'descriptionmsg'  => 'Hides the parent page titles in subpage titles.',
);

unset( $extHideSubPageDir );

// end of file //
