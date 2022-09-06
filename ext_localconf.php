<?php
declare(strict_types=1);
defined('TYPO3_MODE') or die();

// encapsulate all locally defined variables
(function () {

        /**
         * Extend ext:news
         */
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'news-ttaddress-rel';

        // $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['news']['extender'][
        //     \GeorgRinger\News\Domain\Model\News::class
        //     ]['news-ttaddress-rel'] = 'EXT:news-ttaddress-rel/Classes/Domain/Model/News.php';


        /**
         * Extend ext:tt-address
         */
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['tt_address']['classes']['Domain/Model/Address'][] = 'news-ttaddress-rel';

        // $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tt_address']['extender'][
        //     \FriendsOfTYPO3\TtAddress\Domain\Model\Address::class
        //      ]['news-ttaddress-rel'] = 'EXT:news-ttaddress-rel/Classes/Domain/Model/Address.php';

})();
