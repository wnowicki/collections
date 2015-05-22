<?php
/*
 * This file is part of the WNowicki/Collections package.
 *
 * (c) WNowicki <dev@wojciechnowicki.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WNowicki\Collections;

use WNowicki\Collections\Exception\InvalidClassException;
use WNowicki\Collections\Exception\InvalidObjectException;

/**
 * Object Collection
 *
 * @author WN
 * @package WNowicki\Collections
 */
class ObjectCollection extends Collection
{
    private $type;

    /**
     * @author WN
     * @param string $type
     * @throws InvalidClassException
     */
    public function __construct($type)
    {
        if (!class_exists($type) && !interface_exists($type)) {

            throw new InvalidClassException('Class [' . $type . '] in not valid class.');
        }

        $this->type = $type;
    }

    /**
     * Make Object Collection
     *
     * @author WN
     * @param string $type
     * @return ObjectCollection
     */
    public static function make($type)
    {
        return new self($type);
    }

    /**
     * Add element to Collection
     *
     * @author WN
     * @param mixed $element
     * @return $this
     * @throws InvalidObjectException
     */
    public function add($element)
    {
        if (is_object($element) && is_a($element, $this->type)) {

            return parent::add($element);
        }

        throw new InvalidObjectException('Element is not instance of ' . $this->type);
    }
}
