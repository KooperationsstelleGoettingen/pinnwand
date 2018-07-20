<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'KoopGoe.Pinnwand',
            'Pinnwand',
            'Pinnwand'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('pinnwand', 'Configuration/TypoScript', 'Pinnwand');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pinnwand_domain_model_pinn', 'EXT:pinnwand/Resources/Private/Language/locallang_csh_tx_pinnwand_domain_model_pinn.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pinnwand_domain_model_pinn');
    }
);
