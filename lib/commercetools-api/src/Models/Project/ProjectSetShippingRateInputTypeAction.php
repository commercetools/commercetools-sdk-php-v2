<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProjectSetShippingRateInputTypeAction extends ProjectUpdateAction
{

    public const FIELD_SHIPPING_RATE_INPUT_TYPE = 'shippingRateInputType';

    /**
     * <p>If not set, removes existing shippingRateInputType.</p>
     *
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType();

    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void;
}
