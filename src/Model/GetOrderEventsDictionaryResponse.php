<?php

namespace DHLTrackAndTraceClient\Model;

class GetOrderEventsDictionaryResponse
{

    /**
     * @var ArrayOfOrderEventDescription $GetOrderEventsDictionaryResult
     */
    protected $GetOrderEventsDictionaryResult = null;

    /**
     * @param ArrayOfOrderEventDescription $GetOrderEventsDictionaryResult
     */
    public function __construct($GetOrderEventsDictionaryResult)
    {
      $this->GetOrderEventsDictionaryResult = $GetOrderEventsDictionaryResult;
    }

    /**
     * @return ArrayOfOrderEventDescription
     */
    public function getGetOrderEventsDictionaryResult()
    {
      return $this->GetOrderEventsDictionaryResult;
    }

    /**
     * @param ArrayOfOrderEventDescription $GetOrderEventsDictionaryResult
     * @return \DHLTrackAndTraceClient\Model\GetOrderEventsDictionaryResponse
     */
    public function setGetOrderEventsDictionaryResult($GetOrderEventsDictionaryResult)
    {
      $this->GetOrderEventsDictionaryResult = $GetOrderEventsDictionaryResult;
      return $this;
    }

}
