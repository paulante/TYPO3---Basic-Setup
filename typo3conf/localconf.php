<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['SYS']['sitename'] = 'New TYPO3 site';

	// Default password is "joh316" :
$TYPO3_CONF_VARS['BE']['installToolPassword'] = 'bacb98acf97e0b6112b1d1b650b84971';

$TYPO3_CONF_VARS['EXT']['extList'] = 'info,perm,func,filelist,extbase,fluid,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports,felogin,form';

$typo_db_extTableDef_script = 'extTables.php';

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

$TYPO3_CONF_VARS['EXT']['extList'] = 'info,perm,func,filelist,extbase,fluid,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports,felogin,form,rsaauth,saltedpasswords';	// Modified or inserted by TYPO3 Core Update Manager. 
// Updated by TYPO3 Core Update Manager 13-07-12 23:22:26
$TYPO3_CONF_VARS['SYS']['encryptionKey'] = 'ddd281a25c28baaf93fd2be0298c5a9c5c48fb2e7fb5498d9978beef139aa8580cb8eeffcff301952cdc5d365557ee31';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.7';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_username = 'root';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_password = 'peter43';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_host = 'localhost';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 13-07-12 23:22:26
$TYPO3_CONF_VARS['EXT']['extConf']['saltedpasswords'] = 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}';	//  Modified or inserted by TYPO3 Core Update Manager.
$TYPO3_CONF_VARS['BE']['loginSecurityLevel']  = 'rsa';	//  Modified or inserted by TYPO3 Core Update Manager.
$TYPO3_CONF_VARS['FE']['loginSecurityLevel']  = 'rsa';	//  Modified or inserted by TYPO3 Core Update Manager.
// Updated by TYPO3 Core Update Manager 13-07-12 23:22:32
$typo_db = 'typo3';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['installToolPassword'] = '3b433860e24e1d8b6b871c3f6b276f89';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['disable_exec_function'] = '0';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['GFX']['gdlib_png'] = '0';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['GFX']['im_path'] = '/opt/local/bin/';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['GFX']['im_version_5'] = 'gm';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['GFX']['im_path_lzw'] = '';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 13-07-12 23:59:35
$TYPO3_CONF_VARS['EXT']['extConf']['em'] = 'a:1:{s:17:"selectedLanguages";s:2:"de";}';	//  Modified or inserted by TYPO3 Extension Manager.
// Updated by TYPO3 Extension Manager 14-07-12 00:03:16
?>