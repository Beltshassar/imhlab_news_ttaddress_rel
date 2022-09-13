<?php
declare(strict_types=1);

namespace IMHLab\NewsTtaddressRel\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Christoph Daecke <typo3@mediadreams.org>
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
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News
{
    /**
     * ttaddress
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\Address>
     * @\TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $ttaddress = null;

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
    protected function initializeObject()
    {
        $this->contact = $this->contact ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    


    /**
     * Adds a Ttaddress
     *
     * @param \IMHLab\NewsTtaddressRel\Domain\Model\Address $ttaddress
     * @return void
     */
    public function addTtaddressRel(\IMHLab\NewsTtaddressRel\Domain\Model\Address $ttaddress)
    {
        $this->ttaddress->attach($ttaddress);
    }

    /**
     * Removes a Ttaddress
     *
     * @param \IMHLab\NewsTtaddressRel\Domain\Model\Address $ttaddressToRemove
     * @return void
     */
    public function removeTtaddress(\IMHLab\NewsTtaddressRel\Domain\Model\Address $ttaddressToRemove)
    {
        $this->ttaddress->detach($ttaddressToRemove);
    }

    /**
     * Returns the ttaddress
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\Address> $ttaddressRel
     */
    public function getTtaddress()
    {
        return $this->ttaddress;
    }

    /**
     * Sets the ttaddress
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\Address> $ttaddressRel
     * @return void
     */
    public function setTtaddress(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ttaddress)
    {
        $this->ttaddress = $ttaddress;
    }
}
