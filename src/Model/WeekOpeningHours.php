<?php

namespace DHLTrackAndTraceClient\Model;

class WeekOpeningHours
{

    /**
     * @var DayOpeningHours $Friday
     */
    protected $Friday = null;

    /**
     * @var DayOpeningHours $Monday
     */
    protected $Monday = null;

    /**
     * @var DayOpeningHours $Saturday
     */
    protected $Saturday = null;

    /**
     * @var DayOpeningHours $Sunday
     */
    protected $Sunday = null;

    /**
     * @var DayOpeningHours $Thursday
     */
    protected $Thursday = null;

    /**
     * @var DayOpeningHours $Tuesday
     */
    protected $Tuesday = null;

    /**
     * @var DayOpeningHours $Wednesday
     */
    protected $Wednesday = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DayOpeningHours
     */
    public function getFriday()
    {
      return $this->Friday;
    }

    /**
     * @param DayOpeningHours $Friday
     * @return \DHLTrackAndTraceClient\Model\WeekOpeningHours
     */
    public function setFriday($Friday)
    {
      $this->Friday = $Friday;
      return $this;
    }

    /**
     * @return DayOpeningHours
     */
    public function getMonday()
    {
      return $this->Monday;
    }

    /**
     * @param DayOpeningHours $Monday
     * @return \DHLTrackAndTraceClient\Model\WeekOpeningHours
     */
    public function setMonday($Monday)
    {
      $this->Monday = $Monday;
      return $this;
    }

    /**
     * @return DayOpeningHours
     */
    public function getSaturday()
    {
      return $this->Saturday;
    }

    /**
     * @param DayOpeningHours $Saturday
     * @return \DHLTrackAndTraceClient\Model\WeekOpeningHours
     */
    public function setSaturday($Saturday)
    {
      $this->Saturday = $Saturday;
      return $this;
    }

    /**
     * @return DayOpeningHours
     */
    public function getSunday()
    {
      return $this->Sunday;
    }

    /**
     * @param DayOpeningHours $Sunday
     * @return \DHLTrackAndTraceClient\Model\WeekOpeningHours
     */
    public function setSunday($Sunday)
    {
      $this->Sunday = $Sunday;
      return $this;
    }

    /**
     * @return DayOpeningHours
     */
    public function getThursday()
    {
      return $this->Thursday;
    }

    /**
     * @param DayOpeningHours $Thursday
     * @return \DHLTrackAndTraceClient\Model\WeekOpeningHours
     */
    public function setThursday($Thursday)
    {
      $this->Thursday = $Thursday;
      return $this;
    }

    /**
     * @return DayOpeningHours
     */
    public function getTuesday()
    {
      return $this->Tuesday;
    }

    /**
     * @param DayOpeningHours $Tuesday
     * @return \DHLTrackAndTraceClient\Model\WeekOpeningHours
     */
    public function setTuesday($Tuesday)
    {
      $this->Tuesday = $Tuesday;
      return $this;
    }

    /**
     * @return DayOpeningHours
     */
    public function getWednesday()
    {
      return $this->Wednesday;
    }

    /**
     * @param DayOpeningHours $Wednesday
     * @return \DHLTrackAndTraceClient\Model\WeekOpeningHours
     */
    public function setWednesday($Wednesday)
    {
      $this->Wednesday = $Wednesday;
      return $this;
    }

}
