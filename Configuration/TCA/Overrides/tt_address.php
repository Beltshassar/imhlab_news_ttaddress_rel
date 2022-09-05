<?php
defined('TYPO3_MODE') or die();

$tmp_news_rel_columns = [

    'news' => [
        'exclude' => true,
        'label' => 'LLL:EXT:news_ttaddress_rel/Resources/Private/Language/locallang_db.xlf:tt_address.news_rel',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_news_domain_model_news',
            'readOnly' => true,
            'MM' => 'tx_imhlabnewsttaddressrel_news_ttaddress_mm',
            'MM_opposite_field' => 'ttaddress_rel',
            //'foreign_table_where' => ' AND tx_news_domain_model_news.pid=###CURRENT_PID### AND tx_news_domain_model_news.sys_language_uid = ###REC_FIELD_sys_language_uid### ORDER BY tx_news_domain_model_news.datetime DESC ',
            'minitems' => 0,
            'maxitems' => 99,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
        ],
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_address',
    $tmp_news_rel_columns
);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_address',
    '--div--;News:tt_address.news_rel_tab,news'
);

// '--div--;LLL:EXT:news_ttaddress_rel/Resources/Private/Language/locallang_db.xlf:tt_address.news_rel_tab,news'