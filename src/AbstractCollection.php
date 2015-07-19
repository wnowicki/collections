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
     * @param mixed|null $type
     * @return CollectionInterface
     */
    public static function make($type = null)
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
     * Count elements in Collection
     *
     * @author WN
     * @return int
     */
    public function count()
    {
        return count($this->collection);
    }

    /**
     * Forget (delete) element of collection
     *
     * @param int $key
     * @return static
     */
    public function forget($key)
    {
        $this->offsetUnset($key);
        return $this;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->collection);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {
        return $this->collection[$offset];
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @throws InvalidElementException
     */
    public function offsetSet($offset, $value)
    {
        if ($this->isValid($value)) {

            $this->collection[$offset] = $value;
        }
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->collection[$offset]);
    }


    /**
     * Return the current element
     *
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    public function current()
    {
        return $this->offsetGet($this->pointer);
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
        if ($this->offsetExists($this->pointer) &&
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
