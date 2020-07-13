<?php

namespace DHLTrackAndTraceClient\Model;

class GetShipmentsSentADayResponse
{

    /**
     * @var ArrayOfShipment $GetShipmentsSentADayResult
     */
    protected $GetShipmentsSentADayResult = null;

    /**
     * @param ArrayOfShipment $GetShipmentsSentADayResult
     */
    public function __construct($GetShipmentsSentADayResult)
    {
      $this->GetShipmentsSentADayResult = $GetShipmentsSentADayResult;
    }

    /**
     * @return ArrayOfShipment
     */
    public function getGetShipmentsSentADayResult()
    {
      return $this->GetShipmentsSentADayResult;
    }

    /**
     * @param ArrayOfShipment $GetShipmentsSentADayResult
     * @return \DHLTrackAndTraceClient\Model\GetShipmentsSentADayResponse
     */
    public function setGetShipmentsSentADayResult($GetShipmentsSentADayResult)
    {
      $this->GetShipmentsSentADayResult = $GetShipmentsSentADayResult;
      return $this;
    }

}
