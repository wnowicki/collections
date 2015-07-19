<?php
/*
 * This file is part of the WNowicki/Collections package.
 *
 * (c) WNowicki <dev@wojciechnowicki.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace WNowicki\Collections\Test;

use WNowicki\Collections\Collection;

/**
 * Abstract Collection Test
 *
 * @author WN
 * @package WNowicki\Collections\Test
 */
class AbstractCollectionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \WNowicki\Collections\Collection */
    protected $collection;

    public function setUp()
    {
        parent::setUp();

        $this->collection = new Collection();
        $this->collection->add(1)->add(2)->add(3)->add(4);
    }

    public function testCurrent()
    {
        $this->assertSame(1, $this->collection->current());
    }

    public function testNext()
    {
        $this->assertNull($this->collection->next());
        $this->assertSame(2, $this->collection->current());
    }

    public function testKey()
    {
        $this->assertSame(0, $this->collection->key());
        $this->collection->next();
        $this->assertSame(1, $this->collection->key());
    }

    public function testIsValid()
    {
        $this->assertTrue($this->collection->valid());
    }

    public function testIsNotValid()
    {
        $this->collection->next();
        $this->collection->next();
        $this->collection->next();
        $this->collection->next();

        $this->assertFalse($this->collection->valid());
    }

    public function testRewind()
    {
        $this->collection->next();
        $this->collection->next();
        $this->collection->next();
        $this->assertNull($this->collection->rewind());
        $this->assertSame(0, $this->collection->key());
    }

    public function testCount()
    {
        $collection = new Collection();

        $this->assertSame(0, $collection->count());

        $collection->add('www');

        $this->assertSame(1, $collection->count());

        $collection->add('w1');
        $collection->add('w2');
        $collection->add('w3');

        $this->assertSame(4, $collection->count());
    }

    public function testForget()
    {
        $this->collection->next();

        $this->collection->forget($this->collection->key());

        $this->assertFalse($this->collection->valid());
    }
}
