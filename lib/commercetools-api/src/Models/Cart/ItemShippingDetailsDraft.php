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
     * <p>Used to capture one or more (custom) line item specific shipping addresses.
     * By specifying sub-quantities, it is possible to set multiple shipping addresses for one line item.
     * A cart can have <code>shippingDetails</code> where the <code>targets</code> sum does not match the quantity of the line item or custom line item.
     * For the order creation and order updates the <code>targets</code> sum must match the quantity.</p>.
     *
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets();

    public function setTargets(?ItemShippingTargetCollection $targets): void;
}
