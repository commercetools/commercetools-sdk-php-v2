<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Order\ReturnInfo;

class OrderReturnInfoAddedMessageModel extends MessageModel implements OrderReturnInfoAddedMessage {
    const DISCRIMINATOR_VALUE = 'ReturnInfoAdded';

    /**
     * @var ReturnInfo
     */
    protected $returnInfo;

    /**
     * @return ReturnInfo
     */
    public function getReturnInfo()
    {
        if (is_null($this->returnInfo)) {
            $value = $this->raw(OrderReturnInfoAddedMessage::FIELD_RETURN_INFO);
            if (is_null($value)) {
                return $this->mapData(ReturnInfo::class, null);
            }
            $value = $this->mapData(ReturnInfo::class, $value);

            $this->returnInfo = $value;
        }
        return $this->returnInfo;
    }

    /**
     * @param ReturnInfo $returnInfo
     * @return $this
     */
    public function setReturnInfo(ReturnInfo $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }

}
