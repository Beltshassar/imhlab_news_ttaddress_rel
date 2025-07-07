<?php
declare(strict_types=1);
defined('TYPO3') or die('Access denied.');

// encapsulate all locally defined variables
(function () {

        /**
         * Extend ext:news
         */
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'news_ttaddress_rel'; // gør muligvis ingenting

        // $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['news']['extender'][
        //     \GeorgRinger\News\Domain\Model\News::class
        //     ]['news_ttaddress_rel'] = 'EXT:news_ttaddress_rel/Classes/Domain/Model/News.php';


        /**
         * Extend ext:tt-address
         */
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['tt_address']['classes']['Domain/Model/Address'][] = 'news_ttaddress_rel';
})();
