<?php
defined('TYPO3_MODE') || die('Access denied.');
 
call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'KoopGoe.Pinnwand',
            'Pinnwand',
            [
                'Pinn' => 'list'
            ],
            // non-cacheable actions
            [
                'Pinn' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pinnwand {
                        iconIdentifier = pinnwand-plugin-pinnwand
                        title = LLL:EXT:pinnwand/Resources/Private/Language/locallang_db.xlf:tx_pinnwand_pinnwand.name
                        description = LLL:EXT:pinnwand/Resources/Private/Language/locallang_db.xlf:tx_pinnwand_pinnwand.description
                        tt_content_defValues {
                            CType = list
                            list_type = pinnwand_pinnwand
                        }
                    }
                }
                show = *
            }
       }'
    );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
                'pinnwand-plugin-pinnwand',
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:pinnwand/Resources/Public/Icons/user_plugin_pinnwand.svg']
            );
    }
);
