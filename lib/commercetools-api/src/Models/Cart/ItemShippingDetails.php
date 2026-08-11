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
     * <p>Holds information on the quantity of Line Items or Custom Line Items and the address it is shipped.</p>
     *

     * @return null|ItemShippingTargetCollection
     */
    public function getTargets();

    /**
     * <p>Whether the quantity of Line Items or Custom Line Items is equal to the sum of sub-quantities defined in <code>targets</code>.
     * Ordering a Cart when the value is <code>false</code> returns an <a href="ctp:api:type:InvalidItemShippingDetailsError">InvalidItemShippingDetails</a> error.</p>
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
