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

use WNowicki\Collections\ScalarCollection;

/**
 * Collection Test
 *
 * @author WN
 * @package WNowicki\Collections\Test
 */
class ScalarCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testMake()
    {
        $this->assertInstanceOf(
            '\WNowicki\Collections\ScalarCollection',
            ScalarCollection::make(ScalarCollection::TYPE_BOOL)
        );
    }

    public function testMakeNonexistentType()
    {
        $this->setExpectedException('WNowicki\Collections\Exception\InvalidTypeException');
        ScalarCollection::make('xx');
    }

    public function testAdd()
    {
        $collection = ScalarCollection::make(ScalarCollection::TYPE_BOOL);

        $this->assertInstanceOf(
            '\WNowicki\Collections\ScalarCollection',
            $collection->add(true)
        );
    }

    public function testWrongAdd()
    {
        $collection = ScalarCollection::make(ScalarCollection::TYPE_BOOL);

        $this->setExpectedException('WNowicki\Collections\Exception\InvalidElementException');
        $collection->add(6);
    }
}
