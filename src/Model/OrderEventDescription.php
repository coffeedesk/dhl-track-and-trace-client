<?php

namespace DHLTrackAndTraceClient\Model;

class OrderEventDescription
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \DHLTrackAndTraceClient\Model\OrderEventDescription
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \DHLTrackAndTraceClient\Model\OrderEventDescription
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
