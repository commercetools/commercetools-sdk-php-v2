<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ItemShippingDetailsDraft extends JsonObject
{
    public const FIELD_TARGETS = 'targets';

    /**
     * <p>Maps to <code>ItemShippingDetailsDraft.targets</code>.</p>
     *

     * @return null|ItemShippingTargetCollection
     */
    public function getTargets();

    /**
     * @param ?ItemShippingTargetCollection $targets
     */
    public function setTargets(?ItemShippingTargetCollection $targets): void;
}
