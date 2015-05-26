<?php
/*
 * This file is part of the WNowicki/Collections package.
 *
 * (c) WNowicki <dev@wojciechnowicki.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WNowicki\Collections\Test;

use WNowicki\Collections\ObjectCollection;

/**
 * Collection Test
 *
 * @author WN
 * @package WNowicki\Collections\Test
 */
class ObjectScalarCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testMake()
    {
        $this->assertInstanceOf(
            '\WNowicki\Collections\ObjectCollection',
            ObjectCollection::make('\stdClass')
        );
    }
}
