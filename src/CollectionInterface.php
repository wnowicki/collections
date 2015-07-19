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
 * Collection Interface
 *
 * @author WN
 * @package WNowicki\Collections
 */
interface CollectionInterface extends \Iterator, \Countable, \ArrayAccess
{
    /**
     * Forget (delete) element of collection
     *
     * @param int $key
     * @return static
     */
    public function forget($key);
}
