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
})();
