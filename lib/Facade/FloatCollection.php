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

use WNowicki\Collections\ScalarCollection;

/**
 * Float Collection
 *
 * @author WN
 * @package WNowicki\Collections\Facade
 */
class FloatCollection extends ScalarCollection
{
    /**
     * @author WN
     * @throws \WNowicki\Collections\Exception\InvalidTypeException
     */
    public function __construct()
    {
        parent::__construct(self::TYPE_FLOAT);
    }

    /**
     * Make Float Collection
     *
     * @author WN
     * @return FloatCollection
     */
    public static function make()
    {
        return new self();
    }
}
