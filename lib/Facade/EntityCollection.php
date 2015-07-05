<?php
/*
 * This file is part of the WNowicki/Collections package.
 *
 * (c) WNowicki <dev@wojciechnowicki.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace WNowicki\Collections\Facade;

use WNowicki\Collections\ObjectCollection;

/**
 * Entity Collection
 *
 * @author WN
 * @package WNowicki\Collections\Facade
 */
class EntityCollection extends ObjectCollection
{
    /**
     * @author WN
     * @throws \WNowicki\Collections\Exception\InvalidTypeException
     */
    public function __construct()
    {

        parent::__construct('\WNowicki\Generic\EntityInterface');
    }

    /**
     * Get Current Element
     *
     * @author WN
     * @return \stdClass
     */
    public function current()
    {
        return parent::current();
    }
}
