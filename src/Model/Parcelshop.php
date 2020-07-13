<?php

namespace DHLTrackAndTraceClient\Model;

class Parcelshop
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var WeekOpeningHours $OpeningHours
     */
    protected $OpeningHours = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $StreetNumber
     */
    protected $StreetNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \DHLTrackAndTraceClient\Model\Parcelshop
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \DHLTrackAndTraceClient\Model\Parcelshop
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return WeekOpeningHours
     */
    public function getOpeningHours()
    {
      return $this->OpeningHours;
    }

    /**
     * @param WeekOpeningHours $OpeningHours
     * @return \DHLTrackAndTraceClient\Model\Parcelshop
     */
    public function setOpeningHours($OpeningHours)
    {
      $this->OpeningHours = $OpeningHours;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \DHLTrackAndTraceClient\Model\Parcelshop
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \DHLTrackAndTraceClient\Model\Parcelshop
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
      return $this->StreetNumber;
    }

    /**
     * @param string $StreetNumber
     * @return \DHLTrackAndTraceClient\Model\Parcelshop
     */
    public function setStreetNumber($StreetNumber)
    {
      $this->StreetNumber = $StreetNumber;
      return $this;
    }

}
