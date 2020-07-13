<?php

namespace DHLTrackAndTraceClient\Model;

class GetShipmentsResponse
{

    /**
     * @var ArrayOfShipment $GetShipmentsResult
     */
    protected $GetShipmentsResult = null;

    /**
     * @param ArrayOfShipment $GetShipmentsResult
     */
    public function __construct($GetShipmentsResult)
    {
      $this->GetShipmentsResult = $GetShipmentsResult;
    }

    /**
     * @return ArrayOfShipment
     */
    public function getGetShipmentsResult()
    {
      return $this->GetShipmentsResult;
    }

    /**
     * @param ArrayOfShipment $GetShipmentsResult
     * @return \DHLTrackAndTraceClient\Model\GetShipmentsResponse
     */
    public function setGetShipmentsResult($GetShipmentsResult)
    {
      $this->GetShipmentsResult = $GetShipmentsResult;
      return $this;
    }

}
