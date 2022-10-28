<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\LineItem;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderLineItemAddedMessagePayload extends OrderMessagePayload
{
    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_ADDED_QUANTITY = 'addedQuantity';

    /**
     * <p><a href="ctp:api:type:LineItem">Line Item</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|LineItem
     */
    public function getLineItem();

    /**
     * <p>Quantity of <a href="ctp:api:type:LineItem">Line Items</a> that were added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|int
     */
    public function getAddedQuantity();

    /**
     * @param ?LineItem $lineItem
     */
    public function setLineItem(?LineItem $lineItem): void;

    /**
     * @param ?int $addedQuantity
     */
    public function setAddedQuantity(?int $addedQuantity): void;
}
