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

interface OrderLineItemAddedMessage extends Message
{
    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_ADDED_QUANTITY = 'addedQuantity';

    /**
     * @return null|LineItem
     */
    public function getLineItem();

    /**
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
