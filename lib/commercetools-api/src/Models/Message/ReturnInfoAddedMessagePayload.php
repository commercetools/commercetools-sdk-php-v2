<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfo;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReturnInfoAddedMessagePayload extends OrderMessagePayload
{
    public const FIELD_RETURN_INFO = 'returnInfo';

    /**
     * <p>The <a href="ctp:api:type:ReturnInfo">ReturnInfo</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|ReturnInfo
     */
    public function getReturnInfo();

    /**
     * @param ?ReturnInfo $returnInfo
     */
    public function setReturnInfo(?ReturnInfo $returnInfo): void;
}
