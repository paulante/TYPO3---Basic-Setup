<?php

########################################################################
# Extension Manager/Repository config file for ext "wizard_sortpages".
#
# Auto generated 04-07-2012 10:30
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Web>Func, Wizards, Sort pages',
	'description' => 'A little utility to rearrange the sorting order of pages in the backend.',
	'category' => 'module',
	'shy' => 1,
	'dependencies' => 'func_wizards',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
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
	'version' => '4.7.2',
	'_md5_values_when_last_written' => 'a:6:{s:38:"class.tx_wizardsortpages_webfunc_2.php";s:4:"5d98";s:12:"ext_icon.gif";s:4:"6751";s:14:"ext_tables.php";s:4:"f74d";s:13:"locallang.xlf";s:4:"ffb1";s:17:"locallang_csh.xlf";s:4:"cac8";s:23:"cshimages/wizards_1.png";s:4:"44a0";}',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.7.0-0.0.0',
			'func_wizards' => '',
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