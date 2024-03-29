<?php

########################################################################
# Extension Manager/Repository config file for ext "viewpage".
#
# Auto generated 04-07-2012 10:30
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Web>View',
	'description' => 'Shows the frontend webpage inside the backend frameset.',
	'category' => 'module',
	'shy' => 1,
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'view',
	'doNotLoadInFE' => 1,
	'state' => 'stable',
	'internal' => 0,
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Kasper Skaarhoj',
	'author_email' => 'kasperYYYY@typo3.com',
	'author_company' => 'Curby Soft Multimedia',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '4.7.2',
	'_md5_values_when_last_written' => 'a:10:{s:12:"ext_icon.gif";s:4:"9b98";s:14:"ext_tables.php";s:4:"a104";s:14:"view/clear.gif";s:4:"cc11";s:13:"view/conf.php";s:4:"24ff";s:15:"view/dummy.html";s:4:"e302";s:17:"view/frameset.php";s:4:"a100";s:14:"view/index.php";s:4:"3fdf";s:15:"view/layout.gif";s:4:"edde";s:22:"view/locallang_mod.xlf";s:4:"dffe";s:13:"view/view.gif";s:4:"1898";}',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.7.0-0.0.0',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

?>