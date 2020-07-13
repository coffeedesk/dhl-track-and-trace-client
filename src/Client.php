<?php

namespace DHLTrackAndTraceClient;

use DHLTrackAndTraceClient\Model\ArrayOfstring;
use DHLTrackAndTraceClient\Model\GetEventsDictionary;
use DHLTrackAndTraceClient\Model\GetEventsDictionaryResponse;
use DHLTrackAndTraceClient\Model\GetShipments;
use DHLTrackAndTraceClient\Model\GetShipmentsResponse;
use DHLTrackAndTraceClient\Model\TntWebService;

class Client implements ClientInterface {

    const WSDL_URL = 'https://ecom.dhl.com.pl/app/tntwebservice/securetntwebservice_v2.wsdl';

    /** @var int */
    private $clientId;

    /** @var string */
    private $password;

    /** @var TntWebService */
    private $service;

    public function __construct($clientId = null, $password = null, $wsdl = null) {
        $this->clientId = $clientId;
        $this->password = $password;

        if (!$wsdl) {
            $wsdl = self::WSDL_URL;
        }
        $this->service = new TntWebService([], $wsdl);
    }

    /**
     * @param string[] $shipmentNumber
     * @return GetShipmentsResponse
     */
    public function getShipments($shipmentNumber) {
        $arrayOfShipments = new ArrayOfstring();
        $arrayOfShipments->setString($shipmentNumber);

        $getShipments = new GetShipments($arrayOfShipments);

        return $this->service->GetShipments($getShipments);
    }

    /**
     * @return GetEventsDictionaryResponse
     */
    public function getEventsDictionary() {
        $getEventsDictionary = new GetEventsDictionary();

        return $this->service->GetEventsDictionary($getEventsDictionary);
    }
}
