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
 * Bool Collection
 *
 * @author WN
 * @package WNowicki\Collections\Facade
 */
class BoolCollection extends ScalarCollection
{
    /**
     * @author WN
     * @throws \WNowicki\Collections\Exception\InvalidTypeException
     */
    public function __construct()
    {
        parent::__construct(self::TYPE_BOOL);
    }

    /**
     * Make Bool Collection
     *
     * @author WN
     * @param null $type
     * @return BoolCollection
     */
    public static function make($type = null)
    {
        return new self();
    }
}
