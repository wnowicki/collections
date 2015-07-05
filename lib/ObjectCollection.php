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

use WNowicki\Collections\Exception\InvalidClassException;
use WNowicki\Collections\Exception\InvalidElementException;

/**
 * Object Collection
 *
 * @author WN
 * @package WNowicki\Collections
 */
class ObjectCollection extends AbstractCollection
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
    public static function make($type = null)
    {
        return new static($type);
    }

    /**
     * Checks if given element is valid ype for this collection
     *
     * @param $element
     * @return bool
     */
    protected function isValid($element)
    {
        if (is_object($element) && is_a($element, $this->type)) {

            return true;
        }

        return false;
    }

    /**
     * Add element to Collection
     *
     * @author WN
     * @param mixed $element
     * @return $this
     * @throws InvalidElementException
     */
    public function add($element)
    {
        try {
            return parent::add($element);

        } catch (\Exception $e) {

            throw new InvalidElementException('Element is not instance of ' . $this->type);
        }
    }
}
