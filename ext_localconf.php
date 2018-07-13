<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DUD.' . $_EXTKEY,
	'Dudpinnwand',
	array(
		'Pinnwand' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Pinnwand' => '',
	)
);

//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][$_EXTKEY . '_clearcache'] ='DUD\DudPinnwand\Hooks\Tcemain->clearCachePostProc';

?>