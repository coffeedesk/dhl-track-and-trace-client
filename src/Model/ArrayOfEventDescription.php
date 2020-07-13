<?php

namespace DHLTrackAndTraceClient\Model;

class ArrayOfEventDescription implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EventDescription[] $EventDescription
     */
    protected $EventDescription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EventDescription[]
     */
    public function getEventDescription()
    {
      return $this->EventDescription;
    }

    /**
     * @param EventDescription[] $EventDescription
     * @return \DHLTrackAndTraceClient\Model\ArrayOfEventDescription
     */
    public function setEventDescription(array $EventDescription = null)
    {
      $this->EventDescription = $EventDescription;
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
      return isset($this->EventDescription[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EventDescription
     */
    public function offsetGet($offset)
    {
      return $this->EventDescription[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EventDescription $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EventDescription[] = $value;
      } else {
        $this->EventDescription[$offset] = $value;
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
      unset($this->EventDescription[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EventDescription Return the current element
     */
    public function current()
    {
      return current($this->EventDescription);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EventDescription);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EventDescription);
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
      reset($this->EventDescription);
    }

    /**
     * Countable implementation
     *
     * @return EventDescription Return count of elements
     */
    public function count()
    {
      return count($this->EventDescription);
    }

}
