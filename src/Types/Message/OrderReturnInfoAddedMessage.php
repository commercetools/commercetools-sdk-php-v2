<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Order\ReturnInfo;

interface OrderReturnInfoAddedMessage extends Message {
    const FIELD_RETURN_INFO = 'returnInfo';

    /**
     * @return ReturnInfo
     */
    public function getReturnInfo();

    /**
     * @param ReturnInfo $returnInfo
     * @return $this
     */
    public function setReturnInfo(ReturnInfo $returnInfo);

}
