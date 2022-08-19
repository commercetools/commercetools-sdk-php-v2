<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfoCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReturnInfoSetMessagePayload extends OrderMessagePayload
{
    public const FIELD_RETURN_INFO = 'returnInfo';

    /**
     * <p>The <a href="ctp:api:type:ReturnInfo">ReturnInfo</a> that was set on the <a href="ctp:api:type:Order">Order</a> or <a href="ctp:api:type:OrderEdit">Order Edit</a>.</p>
     *

     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo();

    /**
     * @param ?ReturnInfoCollection $returnInfo
     */
    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void;
}
