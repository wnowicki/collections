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

use WNowicki\Collections\Exception\InvalidElementException;
use WNowicki\Collections\Exception\InvalidTypeException;

/**
 * Scalar Collection
 *
 * @author WN
 * @package WNowicki\Collections
 */
class ScalarCollection extends AbstractCollection
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
        if (!$this->isAvailableType($type)) {

            throw new InvalidTypeException();
        }

        $this->type = $type;
    }

    /**
     * Make Object Collection
     *
     * @author WN
     * @param int $type
     * @return ScalarCollection
     * @throws InvalidTypeException
     */
    public static function make($type = null)
    {
        return new self($type);
    }

    /**
     * Checks if given element is valid ype for this collection
     *
     * @author WN
     * @param $element
     * @return bool
     */
    protected function isValid($element)
    {
        switch ($this->type) {
            case self::TYPE_INT:
                return is_int($element);
            case self::TYPE_FLOAT:
                return is_float($element);
            case self::TYPE_STRING:
                return is_string($element);
            case self::TYPE_BOOL:
                return is_bool($element);
        }
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

        } catch (InvalidElementException $e) {

            switch ($this->type) {
                case self::TYPE_INT:
                    throw new InvalidElementException('Expected element to be type integer');
                case self::TYPE_FLOAT:
                    throw new InvalidElementException('Expected element to be type float');
                case self::TYPE_STRING:
                    throw new InvalidElementException('Expected element to be type string');
                case self::TYPE_BOOL:
                    throw new InvalidElementException('Expected element to be type boolean');
            }
        }
    }

    private function isAvailableType($type)
    {
        return (array_search($type, $this->availableTypes()) === false)?false:true;
    }

    /**
     * Available Types
     *
     * @author WN
     * @return int[]
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
