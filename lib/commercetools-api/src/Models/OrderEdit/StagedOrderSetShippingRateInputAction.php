<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Cart\ShippingRateInputDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetShippingRateInputAction extends StagedOrderUpdateAction
{

    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';

    /**
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput();

    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void;
}
