<?php

namespace DHLTrackAndTraceClient\Model;

class Event
{

    /**
     * @var Parcelshop $Parcelshop
     */
    protected $Parcelshop = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $Terminal
     */
    protected $Terminal = null;

    /**
     * @var \DateTime $Timestamp
     */
    protected $Timestamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Parcelshop
     */
    public function getParcelshop()
    {
      return $this->Parcelshop;
    }

    /**
     * @param Parcelshop $Parcelshop
     * @return \DHLTrackAndTraceClient\Model\Event
     */
    public function setParcelshop($Parcelshop)
    {
      $this->Parcelshop = $Parcelshop;
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
     * @return \DHLTrackAndTraceClient\Model\Event
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminal()
    {
      return $this->Terminal;
    }

    /**
     * @param string $Terminal
     * @return \DHLTrackAndTraceClient\Model\Event
     */
    public function setTerminal($Terminal)
    {
      $this->Terminal = $Terminal;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->Timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Timestamp
     * @return \DHLTrackAndTraceClient\Model\Event
     */
    public function setTimestamp(\DateTime $Timestamp = null)
    {
      if ($Timestamp == null) {
       $this->Timestamp = null;
      } else {
        $this->Timestamp = $Timestamp->format(\DateTime::ATOM);
      }
      return $this;
    }

}
