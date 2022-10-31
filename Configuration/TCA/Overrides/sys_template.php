<?php
declare(strict_types=1);

defined('TYPO3') || die();

    /**
     * Add page TsConfig
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:news_ttaddress_rel/Configuration/TsConfig/Page/TCEFORM.tsconfig">'
    );
