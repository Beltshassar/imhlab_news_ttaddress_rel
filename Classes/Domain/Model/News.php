<?php

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
     * ttaddressRel
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\Address>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $ttaddressRel = null;

    /**
     * Adds a TtaddressRel
     *
     * @param \IMHLab\NewsTtaddressRel\Domain\Model\Address $ttaddressRel
     * @return void
     */
    public function addTtaddressRel(\IMHLab\NewsTtaddressRel\Domain\Model\Address $ttaddressRel)
    {
        $this->ttaddressRel->attach($ttaddressRel);
    }

    /**
     * Removes a TtaddressRel
     *
     * @param \IMHLab\NewsTtaddressRel\Domain\Model\Address $ttaddressRelToRemove The TtaddressRel to be removed
     * @return void
     */
    public function removeTtaddressRel(\IMHLab\NewsTtaddressRel\Domain\Model\Address $ttaddressRelToRemove)
    {
        $this->ttaddressRel->detach($ttaddressRelToRemove);
    }

    /**
     * Returns the ttaddressRel
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\Address> ttaddressRel
     */
    public function getTtaddressRel()
    {
        return $this->ttaddressRel;
    }

    /**
     * Sets the ttaddressRel
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\IMHLab\NewsTtaddressRel\Domain\Model\Address> $ttaddressRel
     * @return void
     */
    public function setTtaddressRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ttaddressRel)
    {
        $this->ttaddressRel = $ttaddressRel;
    }
}