<?php

namespace DHLTrackAndTraceClient\Model;

class GetEventsDictionaryResponse
{

    /**
     * @var ArrayOfEventDescription $GetEventsDictionaryResult
     */
    protected $GetEventsDictionaryResult = null;

    /**
     * @param ArrayOfEventDescription $GetEventsDictionaryResult
     */
    public function __construct($GetEventsDictionaryResult)
    {
      $this->GetEventsDictionaryResult = $GetEventsDictionaryResult;
    }

    /**
     * @return ArrayOfEventDescription
     */
    public function getGetEventsDictionaryResult()
    {
      return $this->GetEventsDictionaryResult;
    }

    /**
     * @param ArrayOfEventDescription $GetEventsDictionaryResult
     * @return \DHLTrackAndTraceClient\Model\GetEventsDictionaryResponse
     */
    public function setGetEventsDictionaryResult($GetEventsDictionaryResult)
    {
      $this->GetEventsDictionaryResult = $GetEventsDictionaryResult;
      return $this;
    }

}
