<?php

namespace DHLTrackAndTraceClient\Model;

class ArrayOfOrderEventDescription implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderEventDescription[] $OrderEventDescription
     */
    protected $OrderEventDescription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderEventDescription[]
     */
    public function getOrderEventDescription()
    {
      return $this->OrderEventDescription;
    }

    /**
     * @param OrderEventDescription[] $OrderEventDescription
     * @return \DHLTrackAndTraceClient\Model\ArrayOfOrderEventDescription
     */
    public function setOrderEventDescription(array $OrderEventDescription = null)
    {
      $this->OrderEventDescription = $OrderEventDescription;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->OrderEventDescription[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderEventDescription
     */
    public function offsetGet($offset)
    {
      return $this->OrderEventDescription[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderEventDescription $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderEventDescription[] = $value;
      } else {
        $this->OrderEventDescription[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OrderEventDescription[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderEventDescription Return the current element
     */
    public function current()
    {
      return current($this->OrderEventDescription);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderEventDescription);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderEventDescription);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->OrderEventDescription);
    }

    /**
     * Countable implementation
     *
     * @return OrderEventDescription Return count of elements
     */
    public function count()
    {
      return count($this->OrderEventDescription);
    }

}
