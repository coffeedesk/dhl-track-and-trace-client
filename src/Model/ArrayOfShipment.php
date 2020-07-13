<?php

namespace DHLTrackAndTraceClient\Model;

class ArrayOfShipment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Shipment[] $Shipment
     */
    protected $Shipment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Shipment[]
     */
    public function getShipment()
    {
      return $this->Shipment;
    }

    /**
     * @param Shipment[] $Shipment
     * @return \DHLTrackAndTraceClient\Model\ArrayOfShipment
     */
    public function setShipment(array $Shipment = null)
    {
      $this->Shipment = $Shipment;
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
      return isset($this->Shipment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Shipment
     */
    public function offsetGet($offset)
    {
      return $this->Shipment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Shipment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Shipment[] = $value;
      } else {
        $this->Shipment[$offset] = $value;
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
      unset($this->Shipment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Shipment Return the current element
     */
    public function current()
    {
      return current($this->Shipment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Shipment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Shipment);
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
      reset($this->Shipment);
    }

    /**
     * Countable implementation
     *
     * @return Shipment Return count of elements
     */
    public function count()
    {
      return count($this->Shipment);
    }

}
