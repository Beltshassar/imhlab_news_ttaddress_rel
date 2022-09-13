<?php
defined('TYPO3_MODE') or die();

// encapsulate all locally defined variables
(function () {

        /**
         * Extend ext:news
         */
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'news-ttaddress-rel';

        /**
         * Extend ext:tt-address
         */
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['tt_adress']['classes']['Domain/Model/Address'][] = 'news-ttaddress-rel';

        /**
         * Use of ext:extender
         */
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tt_address']['extender'][\FriendsOfTYPO3\TtAddress\Domain\Model\Address::class]['news-ttaddress-rel'] = \Imhlab\NewsTtaddressRel\Domain\Model\Address::class;
        
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tt_address']['extender'][\FriendsOfTYPO3\TtAddress\Domain\Model\Address::class]['news-ttaddress-rel'] = 'EXT:news-ttaddress-rel/Classes/Extending/Domain/Model/Address.php';
        
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tt_address']['extender'][\FriendsOfTYPO3\TtAddress\Domain\Model\Address::class]['news-ttaddress-rel'] = 'Domain/Model/Address';

        /**
         * Add page TsConfig
         */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:news_ttaddress_rel/Configuration/TsConfig/Page/TCEFORM.tsconfig">'
        );
})();
