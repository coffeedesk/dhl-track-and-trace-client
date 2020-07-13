<?php

namespace DHLTrackAndTraceClient\Model;

class GetShipmentsNoticedADayResponse
{

    /**
     * @var ArrayOfShipment $GetShipmentsNoticedADayResult
     */
    protected $GetShipmentsNoticedADayResult = null;

    /**
     * @param ArrayOfShipment $GetShipmentsNoticedADayResult
     */
    public function __construct($GetShipmentsNoticedADayResult)
    {
      $this->GetShipmentsNoticedADayResult = $GetShipmentsNoticedADayResult;
    }

    /**
     * @return ArrayOfShipment
     */
    public function getGetShipmentsNoticedADayResult()
    {
      return $this->GetShipmentsNoticedADayResult;
    }

    /**
     * @param ArrayOfShipment $GetShipmentsNoticedADayResult
     * @return \DHLTrackAndTraceClient\Model\GetShipmentsNoticedADayResponse
     */
    public function setGetShipmentsNoticedADayResult($GetShipmentsNoticedADayResult)
    {
      $this->GetShipmentsNoticedADayResult = $GetShipmentsNoticedADayResult;
      return $this;
    }

}
