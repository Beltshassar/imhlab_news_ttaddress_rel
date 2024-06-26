<?php
defined('TYPO3') or die('Access denied.');


$tmp_ttaddress_columns = [

    'ttaddress' => [
        'exclude' => true,
        'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_csh_news.xlf:author.description',
        'config' => [
            'type' => 'select',
            'multiple' => 1,
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tt_address',
            // 'foreign_table_where' => ' AND ( ###PAGE_TSCONFIG_STR### = \'FALSE\' OR tt_address.pid = ###PAGE_TSCONFIG_STR### ) AND tt_address.deleted = 0 AND tt_address.hidden = 0 AND tt_address.sys_language_uid = ###REC_FIELD_sys_language_uid### ORDER BY tt_address.first_name ASC, tt_address.last_name ASC',
            'MM' => 'tx_imhlabnewsttaddressrel_news_ttaddress_mm',
            //'MM_opposite_field' => 'news',
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 99,
            // 'behaviour' => [
            //     'allowLanguageSynchronization' => true
            // ],
        ],
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_news_domain_model_news',
    $tmp_ttaddress_columns
);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    '--div--;Forfatter,ttaddress'
);


