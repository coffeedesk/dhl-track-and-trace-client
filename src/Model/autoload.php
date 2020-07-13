<?php


 function autoload_40103680d64fa8bcee975498aee465d7($class)
{
    $classes = array(
        'DHLTrackAndTraceClient\Model\TntWebService' => __DIR__ .'/TntWebService.php',
        'DHLTrackAndTraceClient\Model\ArrayOfEventDescription' => __DIR__ .'/ArrayOfEventDescription.php',
        'DHLTrackAndTraceClient\Model\EventDescription' => __DIR__ .'/EventDescription.php',
        'DHLTrackAndTraceClient\Model\InternalError' => __DIR__ .'/InternalError.php',
        'DHLTrackAndTraceClient\Model\ArrayOfShipment' => __DIR__ .'/ArrayOfShipment.php',
        'DHLTrackAndTraceClient\Model\Shipment' => __DIR__ .'/Shipment.php',
        'DHLTrackAndTraceClient\Model\ArrayOfEvent' => __DIR__ .'/ArrayOfEvent.php',
        'DHLTrackAndTraceClient\Model\Event' => __DIR__ .'/Event.php',
        'DHLTrackAndTraceClient\Model\Parcelshop' => __DIR__ .'/Parcelshop.php',
        'DHLTrackAndTraceClient\Model\WeekOpeningHours' => __DIR__ .'/WeekOpeningHours.php',
        'DHLTrackAndTraceClient\Model\DayOpeningHours' => __DIR__ .'/DayOpeningHours.php',
        'DHLTrackAndTraceClient\Model\ShipmentStatuses' => __DIR__ .'/ShipmentStatuses.php',
        'DHLTrackAndTraceClient\Model\WrongClientIdOrPassword' => __DIR__ .'/WrongClientIdOrPassword.php',
        'DHLTrackAndTraceClient\Model\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'DHLTrackAndTraceClient\Model\ArrayOfOrderEventDescription' => __DIR__ .'/ArrayOfOrderEventDescription.php',
        'DHLTrackAndTraceClient\Model\OrderEventDescription' => __DIR__ .'/OrderEventDescription.php',
        'DHLTrackAndTraceClient\Model\Order' => __DIR__ .'/Order.php',
        'DHLTrackAndTraceClient\Model\ArrayOfOrderEvent' => __DIR__ .'/ArrayOfOrderEvent.php',
        'DHLTrackAndTraceClient\Model\OrderEvent' => __DIR__ .'/OrderEvent.php',
        'DHLTrackAndTraceClient\Model\PickupScheduledTime' => __DIR__ .'/PickupScheduledTime.php',
        'DHLTrackAndTraceClient\Model\OrderStatuses' => __DIR__ .'/OrderStatuses.php',
        'DHLTrackAndTraceClient\Model\GetEventsDictionary' => __DIR__ .'/GetEventsDictionary.php',
        'DHLTrackAndTraceClient\Model\GetEventsDictionaryResponse' => __DIR__ .'/GetEventsDictionaryResponse.php',
        'DHLTrackAndTraceClient\Model\GetShipments' => __DIR__ .'/GetShipments.php',
        'DHLTrackAndTraceClient\Model\GetShipmentsResponse' => __DIR__ .'/GetShipmentsResponse.php',
        'DHLTrackAndTraceClient\Model\GetShipmentsSentADay' => __DIR__ .'/GetShipmentsSentADay.php',
        'DHLTrackAndTraceClient\Model\GetShipmentsSentADayResponse' => __DIR__ .'/GetShipmentsSentADayResponse.php',
        'DHLTrackAndTraceClient\Model\GetShipmentsNoticedADay' => __DIR__ .'/GetShipmentsNoticedADay.php',
        'DHLTrackAndTraceClient\Model\GetShipmentsNoticedADayResponse' => __DIR__ .'/GetShipmentsNoticedADayResponse.php',
        'DHLTrackAndTraceClient\Model\GetOrderEventsDictionary' => __DIR__ .'/GetOrderEventsDictionary.php',
        'DHLTrackAndTraceClient\Model\GetOrderEventsDictionaryResponse' => __DIR__ .'/GetOrderEventsDictionaryResponse.php',
        'DHLTrackAndTraceClient\Model\GetOrder' => __DIR__ .'/GetOrder.php',
        'DHLTrackAndTraceClient\Model\GetOrderResponse' => __DIR__ .'/GetOrderResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_40103680d64fa8bcee975498aee465d7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
