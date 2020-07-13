<?php

namespace DHLTrackAndTraceClient;

use DHLTrackAndTraceClient\Model\GetEventsDictionaryResponse;
use DHLTrackAndTraceClient\Model\GetShipmentsResponse;

interface ClientInterface {

    public function __construct();

    /**
     * @param string[] $shipmentNumber
     * @return GetShipmentsResponse
     */
    public function getShipments($shipmentNumber);

    /**
     * @return GetEventsDictionaryResponse
     */
    public function getEventsDictionary();
}
