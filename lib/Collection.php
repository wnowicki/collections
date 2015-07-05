<?php
/*
 * This file is part of the WNowicki/Collections package.
 *
 * (c) WNowicki <dev@wojciechnowicki.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace WNowicki\Collections;

/**
 * Collection
 *
 * @author WN
 * @package WNowicki\Collections
 */
class Collection extends AbstractCollection
{
    /**
     * Checks if given element is valid ype for this collection
     *
     * @param $element
     * @return bool
     */
    protected function isValid($element)
    {
        return true;
    }
}
