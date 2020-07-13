<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ItemShippingDetails extends JsonObject
{
    public const FIELD_TARGETS = 'targets';
    public const FIELD_VALID = 'valid';

    /**
     * <p>Used to map what sub-quantity should be shipped to which address.
     * Duplicate address keys are not allowed.</p>
     *
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets();

    /**
     * <p><code>true</code> if the quantity of the (custom) line item is equal to the sum of the sub-quantities in <code>targets</code>, <code>false</code> otherwise.
     * A cart cannot be ordered when the value is <code>false</code>.
     * The error InvalidItemShippingDetails will be triggered.</p>
     *
     * @return null|bool
     */
    public function getValid();

    /**
     * @param ?ItemShippingTargetCollection $targets
     */
    public function setTargets(?ItemShippingTargetCollection $targets): void;

    /**
     * @param ?bool $valid
     */
    public function setValid(?bool $valid): void;
}
