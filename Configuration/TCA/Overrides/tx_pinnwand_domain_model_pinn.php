<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tx_pinnwand_domain_model_pinn']['columns']['link'] = array(
            'exclude' => false,
            'label' => 'LLL:EXT:pinnwand/Resources/Private/Language/locallang_db.xlf:tx_pinnwand_domain_model_pinn.link',
            'config' => array(
                'type'     => 'input',
                'size'     => '30',
                'eval'     => 'trim',
                'wizards'  => array(
                    '_PADDING' => 2,
                    'link'     => array(
                        'type'         => 'popup',
                        'title'        => 'Link',
                        'icon'         => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                        'module' => array(
                                 'name' => 'wizard_element_browser',
                                 'urlParameters' => array(
                                         'mode' => 'wizard'
                                 )
                         ),
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                    )
                )
            )
        );
