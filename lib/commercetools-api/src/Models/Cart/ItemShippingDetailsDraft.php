<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface ItemShippingDetailsDraft extends JsonObject
{
    const FIELD_TARGETS = 'targets';

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets();

    public function setTargets(?ItemShippingTargetCollection $targets): void;
}
