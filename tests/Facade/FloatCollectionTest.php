<?php
/*
 * This file is part of the WNowicki/Collections package.
 *
 * (c) WNowicki <dev@wojciechnowicki.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace WNowicki\Collections\Test\Facade;

use WNowicki\Collections\Facade\FloatCollection;

/**
 * Float Collection Test
 *
 * @author WN
 * @package WNowicki\Collections\Test\Facade
 */
class FloatCollectionTest extends \PHPUnit_Framework_TestCase
{

    public function testMake()
    {
        $this->assertInstanceOf('WNowicki\Collections\Facade\FloatCollection', FloatCollection::make());
    }
}
