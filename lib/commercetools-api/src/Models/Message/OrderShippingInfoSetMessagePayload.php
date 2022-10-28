<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderShippingInfoSetMessagePayload extends OrderMessagePayload
{
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_OLD_SHIPPING_INFO = 'oldShippingInfo';

    /**
     * <p><a href="ctp:api:type:ShippingInfo">ShippingInfo</a> after the <a href="ctp:api:type:StagedOrderSetShippingMethodAction">Set Shipping Method</a> or <a href="ctp:api:type:StagedOrderSetCustomShippingMethodAction">Set Custom Shipping Method</a> update action.</p>
     *

     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**
     * <p><a href="ctp:api:type:ShippingInfo">ShippingInfo</a> before the <a href="ctp:api:type:StagedOrderSetShippingMethodAction">Set Shipping Method</a> or <a href="ctp:api:type:StagedOrderSetCustomShippingMethodAction">Set Custom Shipping Method</a> update action.</p>
     *

     * @return null|ShippingInfo
     */
    public function getOldShippingInfo();

    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    /**
     * @param ?ShippingInfo $oldShippingInfo
     */
    public function setOldShippingInfo(?ShippingInfo $oldShippingInfo): void;
}
