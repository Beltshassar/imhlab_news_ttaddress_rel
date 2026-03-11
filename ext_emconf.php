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
    'version' => '0.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'news' => '9.4.0-14.4.99',
            'tt-address' => '6.1.0-10.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];
