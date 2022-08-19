<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\CustomLineItem;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomLineItemRemovedMessagePayload extends OrderMessagePayload
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_CUSTOM_LINE_ITEM = 'customLineItem';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|CustomLineItem
     */
    public function getCustomLineItem();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?CustomLineItem $customLineItem
     */
    public function setCustomLineItem(?CustomLineItem $customLineItem): void;
}
