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
     * <p><code>id</code> of the returned <a href="ctp:api:type:LineItem">LineItem</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>Number of Line Items returned.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
