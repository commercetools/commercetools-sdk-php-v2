<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ItemShippingDetailsDraft extends JsonObject
{
    public const FIELD_TARGETS = 'targets';

    /**
     * <p>Holds information on the quantity of Line Items or Custom Line Items and the address it is shipped.</p>
     * <p>If multiple shipping addresses are present for a Line Item or Custom Line Item, sub-quantities must be specified.</p>
     *

     * @return null|ItemShippingTargetCollection
     */
    public function getTargets();

    /**
     * @param ?ItemShippingTargetCollection $targets
     */
    public function setTargets(?ItemShippingTargetCollection $targets): void;
}
