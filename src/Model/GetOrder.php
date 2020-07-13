<?php

namespace DHLTrackAndTraceClient\Model;

class GetOrder
{

    /**
     * @var int $clientId
     */
    protected $clientId = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @var \DateTime $orderPlacedMonth
     */
    protected $orderPlacedMonth = null;

    /**
     * @param int $clientId
     * @param string $password
     * @param string $orderNumber
     * @param \DateTime $orderPlacedMonth
     */
    public function __construct($clientId, $password, $orderNumber, \DateTime $orderPlacedMonth)
    {
      $this->clientId = $clientId;
      $this->password = $password;
      $this->orderNumber = $orderNumber;
      $this->orderPlacedMonth = $orderPlacedMonth->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getClientId()
    {
      return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return \DHLTrackAndTraceClient\Model\GetOrder
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \DHLTrackAndTraceClient\Model\GetOrder
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return \DHLTrackAndTraceClient\Model\GetOrder
     */
    public function setOrderNumber($orderNumber)
    {
      $this->orderNumber = $orderNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderPlacedMonth()
    {
      if ($this->orderPlacedMonth == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->orderPlacedMonth);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $orderPlacedMonth
     * @return \DHLTrackAndTraceClient\Model\GetOrder
     */
    public function setOrderPlacedMonth(\DateTime $orderPlacedMonth)
    {
      $this->orderPlacedMonth = $orderPlacedMonth->format(\DateTime::ATOM);
      return $this;
    }

}
