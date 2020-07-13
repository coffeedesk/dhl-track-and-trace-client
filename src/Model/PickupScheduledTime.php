<?php

namespace DHLTrackAndTraceClient\Model;

class PickupScheduledTime
{

    /**
     * @var \DateTime $From
     */
    protected $From = null;

    /**
     * @var \DateTime $Till
     */
    protected $Till = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->From == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->From);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $From
     * @return \DHLTrackAndTraceClient\Model\PickupScheduledTime
     */
    public function setFrom(\DateTime $From = null)
    {
      if ($From == null) {
       $this->From = null;
      } else {
        $this->From = $From->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTill()
    {
      if ($this->Till == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Till);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Till
     * @return \DHLTrackAndTraceClient\Model\PickupScheduledTime
     */
    public function setTill(\DateTime $Till = null)
    {
      if ($Till == null) {
       $this->Till = null;
      } else {
        $this->Till = $Till->format(\DateTime::ATOM);
      }
      return $this;
    }

}
