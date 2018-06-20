<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    $languageFilePrefix = 'LLL:EXT:fluid_styled_content/Resources/Private/Language/Database.xlf:';
    $customLanguageFilePrefix = 'LLL:EXT:fsc_flexslider/Resources/Private/Language/locallang_be.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
    // Add the CType "fsc_flexslider"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                    'LLL:EXT:fsc_flexslider/Resources/Private/Language/locallang_be.xlf:wizard.title',
                    'fsc_flexslider',
                    'content-image'
            ],
            'textmedia',
            'after'
    );
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['fsc_flexslider'] = $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['textmedia'];
    $GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] = $GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] . ',layout';
    // Define what fields to display
    $GLOBALS['TCA']['tt_content']['types']['fsc_flexslider'] = [
            'showitem' => '
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.header;header,
            --div--;' . $customLanguageFilePrefix . 'tca.tab.sliderElements,
                 assets,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
				 layout,
				 --palette--;' . $languageFilePrefix . 'tt_content.palette.mediaAdjustments;mediaAdjustments,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
				--palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,',
            'columnsOverrides' => [
                    'media' => [
                            'label' => $languageFilePrefix . 'tt_content.media_references',
                            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('media',
                                    [
                                            'appearance' => [
                                                    'createNewRelationLinkTitle' => $languageFilePrefix . 'tt_content.media_references.addFileReference'
                                            ],
                                        // custom configuration for displaying fields in the overlay/reference table
                                        // behaves the same as the image field.
                                            'foreign_types' => $GLOBALS['TCA']['tt_content']['columns']['image']['config']['foreign_types']
                                    ], $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'])
                    ],
            ]
    ];
});