<?php
declare(strict_types = 1);

return [
    \IMHLab\NewsTtaddressRel\Domain\Model\News::class => [
        'tableName' => 'tx_news_domain_model_news',
        'recordType' => '\IMHLab\NewsTtaddressRel\Domain\Model\News',
    ],
    \IMHLab\NewsTtaddressRel\Domain\Model\Address::class => [
        'tableName' => 'tt_address',
        'recordType' => '\IMHLab\NewsTtaddressRel\Domain\Model\Address',
    ],
];
