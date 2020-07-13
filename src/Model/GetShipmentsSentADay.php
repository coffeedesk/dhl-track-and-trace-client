<?php

namespace DHLTrackAndTraceClient\Model;

class GetShipmentsSentADay
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
     * @var \DateTime $day
     */
    protected $day = null;

    /**
     * @param int $clientId
     * @param string $password
     * @param \DateTime $day
     */
    public function __construct($clientId, $password, \DateTime $day)
    {
      $this->clientId = $clientId;
      $this->password = $password;
      $this->day = $day->format(\DateTime::ATOM);
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
     * @return \DHLTrackAndTraceClient\Model\GetShipmentsSentADay
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
     * @return \DHLTrackAndTraceClient\Model\GetShipmentsSentADay
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDay()
    {
      if ($this->day == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->day);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $day
     * @return \DHLTrackAndTraceClient\Model\GetShipmentsSentADay
     */
    public function setDay(\DateTime $day)
    {
      $this->day = $day->format(\DateTime::ATOM);
      return $this;
    }

}
