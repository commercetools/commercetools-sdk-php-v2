<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface LineItemReturnItem extends ReturnItem
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;
}
