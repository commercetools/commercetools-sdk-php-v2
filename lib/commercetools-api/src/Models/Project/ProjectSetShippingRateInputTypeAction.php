<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectSetShippingRateInputTypeAction extends ProjectUpdateAction
{
    public const FIELD_SHIPPING_RATE_INPUT_TYPE = 'shippingRateInputType';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType();

    /**
     * @param ?ShippingRateInputType $shippingRateInputType
     */
    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void;
}
