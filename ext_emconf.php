<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "news_ttaddress_rel"
 *
 * Inspired by md_news_author and news_author_rel
 *
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'News TtAddress Author relation',
    'description' => 'Adds one or more authors from tt_address to a tx_news record.',
    'category' => 'misc',
    'author' => 'Martin Kristensen and Daniel Alexander Damm',
    'author_email' => 'dad@imh.dk',
    'state' => 'alpha',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.99',
            'news' => '9.4.0-11.0.99',
            'tt-address' => '6.1.0-6.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];
