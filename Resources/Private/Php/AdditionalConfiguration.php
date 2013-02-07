<?php
## Page settings for production-mode ###############################################################
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'fDummy';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['curlUse'] = '1';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '0';

// activates pageNotFound Handling so bots clear deleted pages from the search index
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageNotFound_handling'] = '1';
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageNotFound_handling_statheader'] = 'HTTP/1.1 404 Not Found';

// set session timeout to 1h, so this popup won't appear so often
$GLOBALS['TYPO3_CONF_VARS']['BE']['sessionTimeout'] = '3600';

// allow editing of *.ts and *.xml files in the TYPO3 BE
$GLOBALS['TYPO3_CONF_VARS']['SYS']['textfile_ext'] = 'txt,html,htm,css,inc,tmpl,js,sql,ts,xml';

// no deprecation log
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '';

// file/folder create masks
$GLOBALS['TYPO3_CONF_VARS']['BE']['fileCreateMask'] = '0666';
$GLOBALS['TYPO3_CONF_VARS']['BE']['folderCreateMask'] = '0777';

// upload file size
$GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'] = '51200';

// change access list mode to explicit Allow
$GLOBALS['TYPO3_CONF_VARS']['BE']['explicitADmode'] = 'explicitAllow';

// longer Session by default
$GLOBALS['TYPO3_CONF_VARS']['BE']['sessionTimeout'] = '86400';

// use salted user password hashes
#$GLOBALS['TYPO3_CONF_VARS']['BE']['loginSecurityLevel'] = 'rsa';
#$GLOBALS['TYPO3_CONF_VARS']['FE']['loginSecurityLevel'] = 'rsa';

// default image configuration
$GLOBALS['TYPO3_CONF_VARS']['GFX']['gdlib_png'] = '0';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['TTFdpi'] = '96';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['jpg_quality'] = '90';
$GLOBALS['TYPO3_CONF_VARS']['BE']['disable_exec_function'] = '0';

// do not allow donation window
$GLOBALS['TYPO3_CONF_VARS']['BE']['allowDonateWindow'] = FALSE;

// set required extensions
$GLOBALS['TYPO3_CONF_VARS']['EXT']['requiredExt'] = 'css_styled_content,realurl,openid,wt_base';

// UTF8filesystem by default
$GLOBALS['TYPO3_CONF_VARS']['SYS']['UTF8filesystem'] = '1';

// use php extensions for various charset conversion/processing functions
$GLOBALS['TYPO3_CONF_VARS']['SYS']['t3lib_cs_utils'] = 'mbstring';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['t3lib_cs_convMethod'] = 'iconv';

## Additional page settings for development-mode ###################################################
if (is_file(PATH_typo3conf . 'ENABLE_INSTALL_TOOL')) {
	$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = '49fd0da71f9468b4b7f7d25fcfa4d7d2';
}

if (getenv('TYPO3_CONTEXT') == 'Development') {
	// Default password is "joh316" :
	$GLOBALS['TYPO3_CONF_VARS']['FE']['versionNumberInFilename'] = '';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = 'bacb98acf97e0b6112b1d1b650b84971';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['lockIP'] = '0';
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extCache'] = '0';
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['noEdit'] = '0';
	$GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = '1';
	$GLOBALS['TYPO3_CONF_VARS']['FE']['disableNoCacheParameter'] = '0';
	$GLOBALS['TYPO3_CONF_VARS']['FE']['versionNumberInFilename'] = ''; // include css/js with direct link no ?234532 added
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '1';
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = '0';
}

## Default TYPO3 settings ##########################################################################
$typo_db_extTableDef_script = 'extTables.php';