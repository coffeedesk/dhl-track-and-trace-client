<?php

namespace DHLTrackAndTraceClient\Model;

class GetShipments
{

    /**
     * @var ArrayOfstring $shipmentNumbers
     */
    protected $shipmentNumbers = null;

    /**
     * @param ArrayOfstring $shipmentNumbers
     */
    public function __construct($shipmentNumbers)
    {
      $this->shipmentNumbers = $shipmentNumbers;
    }

    /**
     * @return ArrayOfstring
     */
    public function getShipmentNumbers()
    {
      return $this->shipmentNumbers;
    }

    /**
     * @param ArrayOfstring $shipmentNumbers
     * @return \DHLTrackAndTraceClient\Model\GetShipments
     */
    public function setShipmentNumbers($shipmentNumbers)
    {
      $this->shipmentNumbers = $shipmentNumbers;
      return $this;
    }

}
