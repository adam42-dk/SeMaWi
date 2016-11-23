<?php
# This file was automatically generated by the MediaWiki 1.24.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "SeMaWi";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgScriptExtension = ".php";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "";

## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgScriptPath/resources/assets/nanlogo.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "josef@josefassad.com";
$wgPasswordSender = "josef@josefassad.com";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "CHANGEDBHOST";
$wgDBname = "wiki";
$wgDBuser = "CHANGEDBUSER";
$wgDBpassword = "CHANGEDBPASS";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = true;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "da";

$wgSecretKey = "CHANGEWGSECRETKEY";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "CHANGEWGUPGRADEKEY";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = true;
$wgGroupPermissions['*']['edit'] = true;
$wgGroupPermissions['*']['read'] = true;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
require_once "$IP/skins/CologneBlue/CologneBlue.php";
require_once "$IP/skins/Modern/Modern.php";
require_once "$IP/skins/MonoBook/MonoBook.php";
require_once "$IP/skins/Vector/Vector.php";


# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
require_once "$IP/extensions/Gadgets/Gadgets.php";
require_once "$IP/extensions/ImageMap/ImageMap.php";
require_once "$IP/extensions/InputBox/InputBox.php";
require_once "$IP/extensions/LocalisationUpdate/LocalisationUpdate.php";
require_once "$IP/extensions/Nuke/Nuke.php";
require_once "$IP/extensions/ParserFunctions/ParserFunctions.php";
require_once "$IP/extensions/PdfHandler/PdfHandler.php";
require_once "$IP/extensions/Renameuser/Renameuser.php";
require_once "$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php";
require_once "$IP/extensions/WikiEditor/WikiEditor.php";
require_once "$IP/extensions/ImportUsers/ImportUsers.php";
require_once "$IP/extensions/EditUser/EditUser.php";

# End of automatically generated settings.
# Add more configuration options below.
$wgIncludejQueryMigrate = true;

# Hvem skal have tilladelse til at redigere i brugerkonti?
$wgGroupPermissions['sysop']['edituser'] = true;

# Uncomment the following line when taking a database dump
#$wgReadOnly = "Vi tager kopi af databasen. Vent veligst.";

include_once "$IP/extensions/DataTransfer/DataTransfer.php";
require_once "$IP/extensions/MasonryMainPage/MasonryMainPage.php";
require_once "$IP/extensions/HeaderTabs/HeaderTabs.php";

enableSemantics( 'localhost' );
include_once "$IP/extensions/SemanticForms/SemanticForms.php";

# must come after SemanticForms
require_once("$IP/extensions/SemanticFormsInputs/SemanticFormsInputs.php");

# Semantic MediaWiki settings
$smwgCacheType = CACHE_NONE;
$smwgQMaxDepth = 10;
$smwgQMaxSize = 100;
$smwgQMaxDepth = 20;

#error_reporting( -1 );
#ini_set( 'display_errors', 1 );
#$wgDebugLogFile = "/var/www/wiki/debug-semawi.log";

$wgRawHtml = true;

# Fix timezone
$wgLocaltimezone = "Europe/Copenhagen";

# Deactivate caching entirely
$wgParserCacheType = CACHE_NONE;
$wgCachePages = false;

# following is needed so we can complete on the Ldg in Bruger:Ldg
$sfgAutocompleteOnAllChars = true;

# allow more filetypes
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'doc',
    'xls', 'mpp', 'pdf', 'ppt', 'tiff', 'bmp', 'docx', 'xlsx',
    'pptx', 'ps', 'odt', 'ods', 'odp', 'odg'
);

# to allow file protocol
$wgUrlProtocols = array(
   'bitcoin:', 'ftp://', 'ftps://', 'geo:', 'git://', 'gopher://', 'http://', 'file://',
   'https://', 'irc://', 'ircs://', 'magnet:', 'mailto:', 'mms://', 'news:',
   'nntp://', 'redis://', 'sftp://', 'sip:', 'sips:', 'sms:', 'ssh://',
   'svn://', 'tel:', 'telnet://', 'urn:', 'worldwind://', 'xmpp:', '//'
);

# We need to export a LOT of pages often
# See https://gerrit.wikimedia.org/r/#/c/267038/
$wgExportPagelistLimit = 20000;

$wgSMTP = array(
 'host'     => "172.17.0.1",
 'IDHost'   => "min SeMaWi",
 'port'     => 25,
 'auth'     => false
);

# vi skal kunne skjule sidehistorik
# Se https://github.com/JosefAssad/SeMaWi/issues/176
$wgGroupPermissions['sysop']['deletelogentry'] = true;
$wgGroupPermissions['sysop']['deleterevision'] = true;

# ExternalData setup
require_once "$IP/extensions/ExternalData/ExternalData.php";
# Eksempel på databasedefinition
#$edgDBServer['employee-db'] = "127.0.0.1";
#$edgDBServerType['employee-db'] = "mysql";
#$edgDBName['employee-db'] = "employeesDatabase";
#$edgDBUser['employee-db'] = "guest";
#$edgDBPass['employee-db'] = "p@ssw0rd";