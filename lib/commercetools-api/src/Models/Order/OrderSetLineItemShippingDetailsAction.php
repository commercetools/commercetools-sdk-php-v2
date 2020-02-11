<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetLineItemShippingDetailsAction extends OrderUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    public function setLineItemId(?string $lineItemId): void;

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
