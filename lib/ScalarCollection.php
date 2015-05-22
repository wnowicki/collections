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

use WNowicki\Collections\Exception\InvalidElementException;
use WNowicki\Collections\Exception\InvalidTypeException;

/**
 * Scalar Collection
 *
 * @author WN
 * @package WNowicki\Collections
 */
class ScalarCollection extends Collection
{
    const TYPE_INT = 1;
    const TYPE_FLOAT = 2;
    const TYPE_STRING = 4;
    const TYPE_BOOL = 8;

    private $type;

    /**
     * @author WN
     * @param int $type
     * @throws InvalidTypeException
     */
    public function __construct($type)
    {
        if (!array_key_exists($type, $this->availableTypes())) {

            throw new InvalidTypeException();
        }

        $this->type = $type;
    }

    /**
     * Make Object Collection
     *
     * @author WN
     * @param int $type
     * @return ObjectCollection
     * @throws InvalidTypeException
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
     * @throws InvalidElementException
     */
    public function add($element)
    {
        if (!is_scalar($element)) {

            throw new InvalidElementException('Expected element to be a scalar.');
        }

        if ($this->type == self::TYPE_INT && !is_int($element)) {

            throw new InvalidElementException('Expected element to be type integer');

        } elseif ($this->type == self::TYPE_FLOAT && !is_float($element)) {

            throw new InvalidElementException('Expected element to be type float');

        } elseif ($this->type == self::TYPE_STRING && !is_string($element)) {

            throw new InvalidElementException('Expected element to be type string');

        } elseif ($this->type == self::TYPE_BOOL && !is_bool($element)) {

            throw new InvalidElementException('Expected element to be type boolean');
        }

        return parent::add($element);
    }

    /**
     * Available Types
     *
     * @author WN
     * @return array
     */
    private function availableTypes()
    {
        return [
            self::TYPE_INT,
            self::TYPE_FLOAT,
            self::TYPE_STRING,
            self::TYPE_BOOL,
        ];
    }
}
