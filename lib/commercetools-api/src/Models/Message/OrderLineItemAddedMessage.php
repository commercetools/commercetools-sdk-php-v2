<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\LineItem;

interface OrderLineItemAddedMessage extends Message
{
    const FIELD_LINE_ITEM = 'lineItem';
    const FIELD_ADDED_QUANTITY = 'addedQuantity';

    /**
     * @return null|LineItem
     */
    public function getLineItem();

    /**
     * @return null|int
     */
    public function getAddedQuantity();

    public function setLineItem(?LineItem $lineItem): void;

    public function setAddedQuantity(?int $addedQuantity): void;
}
