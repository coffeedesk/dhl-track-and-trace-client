<?php

namespace DHLTrackAndTraceClient\Model;

class Shipment
{

    /**
     * @var string $ClientReferenceNumber
     */
    protected $ClientReferenceNumber = null;

    /**
     * @var ArrayOfEvent $Events
     */
    protected $Events = null;

    /**
     * @var \DateTime $ReceiptDate
     */
    protected $ReceiptDate = null;

    /**
     * @var string $ReceivedBy
     */
    protected $ReceivedBy = null;

    /**
     * @var string $ReceivingTerminal
     */
    protected $ReceivingTerminal = null;

    /**
     * @var string $SendingTerminal
     */
    protected $SendingTerminal = null;

    /**
     * @var \DateTime $SentDate
     */
    protected $SentDate = null;

    /**
     * @var string $ShipmentNumber
     */
    protected $ShipmentNumber = null;

    /**
     * @var ShipmentStatuses $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getClientReferenceNumber()
    {
      return $this->ClientReferenceNumber;
    }

    /**
     * @param string $ClientReferenceNumber
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setClientReferenceNumber($ClientReferenceNumber)
    {
      $this->ClientReferenceNumber = $ClientReferenceNumber;
      return $this;
    }

    /**
     * @return ArrayOfEvent
     */
    public function getEvents()
    {
      return $this->Events;
    }

    /**
     * @param ArrayOfEvent $Events
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setEvents($Events)
    {
      $this->Events = $Events;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceiptDate()
    {
      if ($this->ReceiptDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReceiptDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReceiptDate
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setReceiptDate(\DateTime $ReceiptDate = null)
    {
      if ($ReceiptDate == null) {
       $this->ReceiptDate = null;
      } else {
        $this->ReceiptDate = $ReceiptDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReceivedBy()
    {
      return $this->ReceivedBy;
    }

    /**
     * @param string $ReceivedBy
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setReceivedBy($ReceivedBy)
    {
      $this->ReceivedBy = $ReceivedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceivingTerminal()
    {
      return $this->ReceivingTerminal;
    }

    /**
     * @param string $ReceivingTerminal
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setReceivingTerminal($ReceivingTerminal)
    {
      $this->ReceivingTerminal = $ReceivingTerminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendingTerminal()
    {
      return $this->SendingTerminal;
    }

    /**
     * @param string $SendingTerminal
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setSendingTerminal($SendingTerminal)
    {
      $this->SendingTerminal = $SendingTerminal;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSentDate()
    {
      if ($this->SentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SentDate
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setSentDate(\DateTime $SentDate = null)
    {
      if ($SentDate == null) {
       $this->SentDate = null;
      } else {
        $this->SentDate = $SentDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentNumber()
    {
      return $this->ShipmentNumber;
    }

    /**
     * @param string $ShipmentNumber
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setShipmentNumber($ShipmentNumber)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      return $this;
    }

    /**
     * @return ShipmentStatuses
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ShipmentStatuses $Status
     * @return \DHLTrackAndTraceClient\Model\Shipment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
