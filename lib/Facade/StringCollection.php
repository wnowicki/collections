<?php
/*
 * This file is part of the WNowicki/Collections package.
 *
 * (c) WNowicki <dev@wojciechnowicki.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WNowicki\Collections\Facade;

use WNowicki\Collections\ScalarCollection;

/**
 * String Collection
 *
 * @author WN
 * @package WNowicki\Collections\Facade
 */
class StringCollection extends ScalarCollection
{
    /**
     * @author WN
     * @throws \WNowicki\Collections\Exception\InvalidTypeException
     */
    public function __construct()
    {
        parent::__construct(self::TYPE_STRING);
    }

    /**
     * Make String Collection
     * 
     * @author WN
     * @return StringCollection
     */
    public static function make()
    {
        return new self();
    }
}
