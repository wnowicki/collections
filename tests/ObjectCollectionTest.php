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

    public function testMakeNonexistentType()
    {
        $this->setExpectedException('WNowicki\Collections\Exception\InvalidClassException');
        ObjectCollection::make('\NonStdClass');
    }

    public function testAdd()
    {
        $collection = ObjectCollection::make('\stdClass');
        $element = new \stdClass();

        $this->assertInstanceOf(
            '\WNowicki\Collections\ObjectCollection',
            $collection->add($element)
        );
    }

    public function testWrongAdd()
    {
        $collection = ObjectCollection::make('\stdClass');

        $this->setExpectedException('WNowicki\Collections\Exception\InvalidElementException');
        $collection->add($this);
    }
}
