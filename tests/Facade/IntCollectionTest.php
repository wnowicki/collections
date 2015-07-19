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

use WNowicki\Collections\Facade\IntCollection;

/**
 * Int Collection Test
 *
 * @author WN
 * @package WNowicki\Collections\Test\Facade
 */
class IntCollectionTest extends \PHPUnit_Framework_TestCase
{

    public function testMake()
    {
        $this->assertInstanceOf('WNowicki\Collections\Facade\IntCollection', IntCollection::make());
    }

    public function testWrongAdd()
    {
        $collection = IntCollection::make();

        $this->setExpectedException(
            'WNowicki\Collections\Exception\InvalidElementException',
            'Expected element to be type of int'
        );
        $collection->add('x');
    }
}
