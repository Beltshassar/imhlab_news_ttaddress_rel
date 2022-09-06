<?php
declare(strict_types=1);

namespace IMHLab\NewsTtaddressRel\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2022 IMHlab <dad@imh.dk>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use \TYPO3\CMS\Extbase\Persistence\ObjectStorage as ObjectStorage;
use \TYPO3\CMS\Extbase\Annotation\ORM\Lazy as Lazy;
use \IMHLab\NewsTtaddressRel\Domain\Model\News as News;

/**
 * Address
 */
class Address extends \FriendsOfTYPO3\TtAddress\Domain\Model\Address
{
    /**
     * news
     *
     * @var ObjectStorage<News>
     * @Lazy
     */
    protected $news;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        parent::__construct();
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->news = new ObjectStorage();
    }

    /**
     * Adds a News
     *
     * @param News $news
     * @return void
     */
    public function addNews(News $news)
    {
        $this->news->attach($news);
    }

    /**
     * Removes a News
     *
     * @param News $newsToRemove
     * @return void
     */
    public function removeNews(News $newsToRemove)
    {
        $this->news->detach($newsToRemove);
    }

    /**
     * Returns the news
     *
     * @return ObjectStorage<News> $news
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Sets the news
     *
     * @param ObjectStorage<News> $news
     * @return void
     */
    public function setNews(ObjectStorage $news)
    {
        $this->news = $news;
    }
}
