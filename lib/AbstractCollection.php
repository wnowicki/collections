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

/**
 * AbstractCollection
 *
 * @author WN
 * @package WNowicki\Collections
 */
abstract class AbstractCollection implements CollectionInterface
{
    private $collection = [];
    private $pointer = 0;

    /**
     * Checks if given element is valid ype for this collection
     *
     * @param $element
     * @return bool
     */
    abstract protected function isValid($element);

    /**
     * Make Collection
     *
     * @author WN
     * @return CollectionInterface
     */
    public static function make()
    {
        return new static();
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
        if ($this->isValid($element)) {

            $this->collection[] = $element;
            return $this;
        }

        throw new InvalidElementException('Invalid element.');
    }

    /**
     * Return the current element
     *
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    public function current()
    {
        return $this->collection[$this->pointer];
    }

    /**
     * Move forward to next element
     *
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->pointer++;
    }

    /**
     * Return the key of the current element
     *
     * @link http://php.net/manual/en/iterator.key.php
     * @return int
     */
    public function key()
    {
        return $this->pointer;
    }

    /**
     * Checks if current position is valid
     *
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        if (array_key_exists($this->pointer, $this->collection) &&
            $this->isValid($this->current())
        ) {

            return true;
        }

        return false;
    }

    /**
     * Rewind the Iterator to the first element
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->pointer = 0;
    }
}