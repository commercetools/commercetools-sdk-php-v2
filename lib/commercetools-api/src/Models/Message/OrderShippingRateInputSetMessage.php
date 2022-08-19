<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderShippingRateInputSetMessage extends OrderMessage
{
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_OLD_SHIPPING_RATE_INPUT = 'oldShippingRateInput';

    /**
     * <p><a href="ctp:api:type:ShippingRateInput">ShippingRateInput</a> after the <a href="ctp:api:type:StagedOrderSetShippingRateInputAction">Set ShippingRateInput</a> update action.</p>
     *

     * @return null|ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * <p><a href="ctp:api:type:ShippingRateInput">ShippingRateInput</a> before the <a href="ctp:api:type:StagedOrderSetShippingRateInputAction">Set ShippingRateInput</a> update action.</p>
     *

     * @return null|ShippingRateInput
     */
    public function getOldShippingRateInput();

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    /**
     * @param ?ShippingRateInput $oldShippingRateInput
     */
    public function setOldShippingRateInput(?ShippingRateInput $oldShippingRateInput): void;
}
