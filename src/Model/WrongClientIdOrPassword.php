<?php

namespace DHLTrackAndTraceClient\Model;

class WrongClientIdOrPassword
{

    /**
     * @var int $SapId
     */
    protected $SapId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSapId()
    {
      return $this->SapId;
    }

    /**
     * @param int $SapId
     * @return \DHLTrackAndTraceClient\Model\WrongClientIdOrPassword
     */
    public function setSapId($SapId)
    {
      $this->SapId = $SapId;
      return $this;
    }

}
