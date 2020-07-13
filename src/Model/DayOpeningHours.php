<?php

namespace DHLTrackAndTraceClient\Model;

class DayOpeningHours
{

    /**
     * @var string $From
     */
    protected $From = null;

    /**
     * @var string $To
     */
    protected $To = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param string $From
     * @return \DHLTrackAndTraceClient\Model\DayOpeningHours
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param string $To
     * @return \DHLTrackAndTraceClient\Model\DayOpeningHours
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
