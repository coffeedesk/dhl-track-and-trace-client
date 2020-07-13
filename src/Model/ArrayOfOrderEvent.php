<?php

namespace DHLTrackAndTraceClient\Model;

class ArrayOfOrderEvent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderEvent[] $OrderEvent
     */
    protected $OrderEvent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderEvent[]
     */
    public function getOrderEvent()
    {
      return $this->OrderEvent;
    }

    /**
     * @param OrderEvent[] $OrderEvent
     * @return \DHLTrackAndTraceClient\Model\ArrayOfOrderEvent
     */
    public function setOrderEvent(array $OrderEvent = null)
    {
      $this->OrderEvent = $OrderEvent;
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
      return isset($this->OrderEvent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderEvent
     */
    public function offsetGet($offset)
    {
      return $this->OrderEvent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderEvent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderEvent[] = $value;
      } else {
        $this->OrderEvent[$offset] = $value;
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
      unset($this->OrderEvent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderEvent Return the current element
     */
    public function current()
    {
      return current($this->OrderEvent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderEvent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderEvent);
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
      reset($this->OrderEvent);
    }

    /**
     * Countable implementation
     *
     * @return OrderEvent Return count of elements
     */
    public function count()
    {
      return count($this->OrderEvent);
    }

}
