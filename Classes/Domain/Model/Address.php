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

/**
 * Address
 */
class Address extends \FriendsOfTYPO3\TtAddress\Domain\Model\Address
{
    /**
     * news
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\News>
     * @\TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $news = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        parent::__construct();
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->news = $this->news ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a News
     *
     * @param \IMHLab\NewsTtaddressRel\Domain\Model\News $news
     * @return void
     */
    public function addNews(\IMHLab\NewsTtaddressRel\Domain\Model\News $news)
    {
        $this->news->attach($news);
    }

    /**
     * Removes a News
     *
     * @param \IMHLab\NewsTtaddressRel\Domain\Model\News $newsToRemove
     * @return void
     */
    public function removeNews(\IMHLab\NewsTtaddressRel\Domain\Model\News $newsToRemove)
    {
        $this->news->detach($newsToRemove);
    }

    /**
     * Returns the news
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\News> $news
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Sets the news
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\News> $news
     * @return void
     */
    public function setNews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $news)
    {
        $this->news = $news;
    }
}
