<?php

namespace DHLTrackAndTraceClient\Model;

class TntWebService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfEventDescription' => 'DHLTrackAndTraceClient\\Model\\ArrayOfEventDescription',
      'EventDescription' => 'DHLTrackAndTraceClient\\Model\\EventDescription',
      'InternalError' => 'DHLTrackAndTraceClient\\Model\\InternalError',
      'ArrayOfShipment' => 'DHLTrackAndTraceClient\\Model\\ArrayOfShipment',
      'Shipment' => 'DHLTrackAndTraceClient\\Model\\Shipment',
      'ArrayOfEvent' => 'DHLTrackAndTraceClient\\Model\\ArrayOfEvent',
      'Event' => 'DHLTrackAndTraceClient\\Model\\Event',
      'Parcelshop' => 'DHLTrackAndTraceClient\\Model\\Parcelshop',
      'WeekOpeningHours' => 'DHLTrackAndTraceClient\\Model\\WeekOpeningHours',
      'DayOpeningHours' => 'DHLTrackAndTraceClient\\Model\\DayOpeningHours',
      'WrongClientIdOrPassword' => 'DHLTrackAndTraceClient\\Model\\WrongClientIdOrPassword',
      'ArrayOfstring' => 'DHLTrackAndTraceClient\\Model\\ArrayOfstring',
      'ArrayOfOrderEventDescription' => 'DHLTrackAndTraceClient\\Model\\ArrayOfOrderEventDescription',
      'OrderEventDescription' => 'DHLTrackAndTraceClient\\Model\\OrderEventDescription',
      'Order' => 'DHLTrackAndTraceClient\\Model\\Order',
      'ArrayOfOrderEvent' => 'DHLTrackAndTraceClient\\Model\\ArrayOfOrderEvent',
      'OrderEvent' => 'DHLTrackAndTraceClient\\Model\\OrderEvent',
      'PickupScheduledTime' => 'DHLTrackAndTraceClient\\Model\\PickupScheduledTime',
      'GetEventsDictionary' => 'DHLTrackAndTraceClient\\Model\\GetEventsDictionary',
      'GetEventsDictionaryResponse' => 'DHLTrackAndTraceClient\\Model\\GetEventsDictionaryResponse',
      'GetShipments' => 'DHLTrackAndTraceClient\\Model\\GetShipments',
      'GetShipmentsResponse' => 'DHLTrackAndTraceClient\\Model\\GetShipmentsResponse',
      'GetShipmentsSentADay' => 'DHLTrackAndTraceClient\\Model\\GetShipmentsSentADay',
      'GetShipmentsSentADayResponse' => 'DHLTrackAndTraceClient\\Model\\GetShipmentsSentADayResponse',
      'GetShipmentsNoticedADay' => 'DHLTrackAndTraceClient\\Model\\GetShipmentsNoticedADay',
      'GetShipmentsNoticedADayResponse' => 'DHLTrackAndTraceClient\\Model\\GetShipmentsNoticedADayResponse',
      'GetOrderEventsDictionary' => 'DHLTrackAndTraceClient\\Model\\GetOrderEventsDictionary',
      'GetOrderEventsDictionaryResponse' => 'DHLTrackAndTraceClient\\Model\\GetOrderEventsDictionaryResponse',
      'GetOrder' => 'DHLTrackAndTraceClient\\Model\\GetOrder',
      'GetOrderResponse' => 'DHLTrackAndTraceClient\\Model\\GetOrderResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ecom.dhl.com.pl/app/tntwebservice/securetntwebservice_v2.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetEventsDictionary $parameters
     * @return GetEventsDictionaryResponse
     */
    public function GetEventsDictionary(GetEventsDictionary $parameters)
    {
      return $this->__soapCall('GetEventsDictionary', array($parameters));
    }

    /**
     * @param GetShipments $parameters
     * @return GetShipmentsResponse
     */
    public function GetShipments(GetShipments $parameters)
    {
      return $this->__soapCall('GetShipments', array($parameters));
    }

    /**
     * @param GetShipmentsSentADay $parameters
     * @return GetShipmentsSentADayResponse
     */
    public function GetShipmentsSentADay(GetShipmentsSentADay $parameters)
    {
      return $this->__soapCall('GetShipmentsSentADay', array($parameters));
    }

    /**
     * @param GetShipmentsNoticedADay $parameters
     * @return GetShipmentsNoticedADayResponse
     */
    public function GetShipmentsNoticedADay(GetShipmentsNoticedADay $parameters)
    {
      return $this->__soapCall('GetShipmentsNoticedADay', array($parameters));
    }

    /**
     * @param GetOrderEventsDictionary $parameters
     * @return GetOrderEventsDictionaryResponse
     */
    public function GetOrderEventsDictionary(GetOrderEventsDictionary $parameters)
    {
      return $this->__soapCall('GetOrderEventsDictionary', array($parameters));
    }

    /**
     * @param GetOrder $parameters
     * @return GetOrderResponse
     */
    public function GetOrder(GetOrder $parameters)
    {
      return $this->__soapCall('GetOrder', array($parameters));
    }

}
