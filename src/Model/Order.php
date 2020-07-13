<?php

namespace DHLTrackAndTraceClient\Model;

class Order
{

    /**
     * @var ArrayOfOrderEvent $Events
     */
    protected $Events = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var \DateTime $OrderPlacedMonth
     */
    protected $OrderPlacedMonth = null;

    /**
     * @var \DateTime $OrderPlacementDate
     */
    protected $OrderPlacementDate = null;

    /**
     * @var string $OriginServiceArea
     */
    protected $OriginServiceArea = null;

    /**
     * @var PickupScheduledTime $PickupScheduledTime
     */
    protected $PickupScheduledTime = null;

    /**
     * @var ArrayOfstring $Shipments
     */
    protected $Shipments = null;

    /**
     * @var OrderStatuses $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfOrderEvent
     */
    public function getEvents()
    {
      return $this->Events;
    }

    /**
     * @param ArrayOfOrderEvent $Events
     * @return \DHLTrackAndTraceClient\Model\Order
     */
    public function setEvents($Events)
    {
      $this->Events = $Events;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \DHLTrackAndTraceClient\Model\Order
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderPlacedMonth()
    {
      if ($this->OrderPlacedMonth == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderPlacedMonth);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderPlacedMonth
     * @return \DHLTrackAndTraceClient\Model\Order
     */
    public function setOrderPlacedMonth(\DateTime $OrderPlacedMonth = null)
    {
      if ($OrderPlacedMonth == null) {
       $this->OrderPlacedMonth = null;
      } else {
        $this->OrderPlacedMonth = $OrderPlacedMonth->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderPlacementDate()
    {
      if ($this->OrderPlacementDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderPlacementDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderPlacementDate
     * @return \DHLTrackAndTraceClient\Model\Order
     */
    public function setOrderPlacementDate(\DateTime $OrderPlacementDate = null)
    {
      if ($OrderPlacementDate == null) {
       $this->OrderPlacementDate = null;
      } else {
        $this->OrderPlacementDate = $OrderPlacementDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginServiceArea()
    {
      return $this->OriginServiceArea;
    }

    /**
     * @param string $OriginServiceArea
     * @return \DHLTrackAndTraceClient\Model\Order
     */
    public function setOriginServiceArea($OriginServiceArea)
    {
      $this->OriginServiceArea = $OriginServiceArea;
      return $this;
    }

    /**
     * @return PickupScheduledTime
     */
    public function getPickupScheduledTime()
    {
      return $this->PickupScheduledTime;
    }

    /**
     * @param PickupScheduledTime $PickupScheduledTime
     * @return \DHLTrackAndTraceClient\Model\Order
     */
    public function setPickupScheduledTime($PickupScheduledTime)
    {
      $this->PickupScheduledTime = $PickupScheduledTime;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getShipments()
    {
      return $this->Shipments;
    }

    /**
     * @param ArrayOfstring $Shipments
     * @return \DHLTrackAndTraceClient\Model\Order
     */
    public function setShipments($Shipments)
    {
      $this->Shipments = $Shipments;
      return $this;
    }

    /**
     * @return OrderStatuses
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param OrderStatuses $Status
     * @return \DHLTrackAndTraceClient\Model\Order
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
