<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

interface LineItemReturnItem extends ReturnItem
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';

    /**
     * @return null|string
     */
    public function getLineItemId();

    public function setLineItemId(?string $lineItemId): void;
}
