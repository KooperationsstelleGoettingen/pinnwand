<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/*\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'DUD.Pinnwand',
    'Pinnwand',
    'Pinnwand'
);*/

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Dud Pinnwand');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pinnwand_domain_model_pinnwand', 'EXT:dud_pinnwand/Resources/Private/Language/locallang_csh_tx_pinnwand_domain_model_pinnwand.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pinnwand_domain_model_pinnwand');
