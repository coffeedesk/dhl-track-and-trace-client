<?php

namespace DHLTrackAndTraceClient\Model;

class OrderEvent
{

    /**
     * @var PickupScheduledTime $PickupScheduledTime
     */
    protected $PickupScheduledTime = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $Timestamp
     */
    protected $Timestamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PickupScheduledTime
     */
    public function getPickupScheduledTime()
    {
      return $this->PickupScheduledTime;
    }

    /**
     * @param PickupScheduledTime $PickupScheduledTime
     * @return \DHLTrackAndTraceClient\Model\OrderEvent
     */
    public function setPickupScheduledTime($PickupScheduledTime)
    {
      $this->PickupScheduledTime = $PickupScheduledTime;
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
     * @return \DHLTrackAndTraceClient\Model\OrderEvent
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \DHLTrackAndTraceClient\Model\OrderEvent
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
