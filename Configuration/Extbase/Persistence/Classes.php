<?php
declare(strict_types = 1);

return [
    \IMHLab\NewsTtaddressRel\Domain\Model\News::class => [
        'tableName' => 'tx_news_domain_model_news',
        'recordType' => 0,
    ],
    \IMHLab\NewsTtaddressRel\Domain\Model\Address::class => [
        'tableName' => 'tt_address',
        'recordType' => 0,
    ],
];
