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
     * @param null $type
     * @throws \WNowicki\Collections\Exception\InvalidClassException
     */
    public function __construct($type = null)
    {
        parent::__construct($type === null?'\WNowicki\Generic\Contracts\Entity':$type);
    }

    /**
     * Make Collection
     *
     * @author WN
     * @param null $type
     * @return \WNowicki\Generic\Contracts\Entity
     */
    public static function make($type = null)
    {
        return new static($type);
    }
}
