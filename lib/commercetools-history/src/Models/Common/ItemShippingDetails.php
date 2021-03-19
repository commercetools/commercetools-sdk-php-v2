<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ItemShippingDetails extends JsonObject
{

    public const FIELD_TARGETS = 'targets';
    public const FIELD_VALID = 'valid';

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets();

    /**
     * <p>true if the quantity of the (custom) line item is equal to the sum of the sub-quantities in <code>targets</code>, <code>false</code> otherwise. A cart cannot be ordered when the value is <code>false</code>. The error InvalidItemShippingDetails will be triggered.</p>
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
