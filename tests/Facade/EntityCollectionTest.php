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

use WNowicki\Collections\Facade\EntityCollection;

/**
 * Entity Collection Test
 *
 * @author WN
 * @package WNowicki\Collections\Test\Facade
 */
class EntityCollectionTest extends \PHPUnit_Framework_TestCase
{

    public function testMake()
    {
        $this->assertInstanceOf('WNowicki\Collections\Facade\EntityCollection', EntityCollection::make());
    }

    public function testAdd()
    {
        $collection = EntityCollection::make()->add($this->getMock('\WNowicki\Generic\Contracts\Entity'));

        $this->assertInstanceOf('\WNowicki\Generic\Contracts\Entity', $collection->current());
    }
}
