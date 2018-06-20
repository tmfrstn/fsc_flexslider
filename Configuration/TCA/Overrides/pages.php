<?php

defined('TYPO3_MODE') || die();

// New Content element wizards
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'fsc_flexslider',
    'Configuration/PageTS/Mod/Wizards/newContentElement.tsconfig',
    'FSC Flexslider: New Content Element Wizards'
);