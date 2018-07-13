<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Dudpinnwand',
	'Dud Pinnwand'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Dud Pinnwand');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dudpinnwand_domain_model_pinnwand', 'EXT:dud_pinnwand/Resources/Private/Language/locallang_csh_tx_dudpinnwand_domain_model_pinnwand.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dudpinnwand_domain_model_pinnwand');
/*
$TCA['tx_dudpinnwand_domain_model_pinnwand'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dud_pinnwand/Resources/Private/Language/locallang_db.xlf:tx_dudpinnwand_domain_model_pinnwand',
		'label' => 'alttext',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'date,image,alttext,link,text,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Pinnwand.php',
		'iconfile' => 'EXT:dud_pinnwand/Resources/Public/Icons/pinnwand.png'
	),
);
*/
?>
