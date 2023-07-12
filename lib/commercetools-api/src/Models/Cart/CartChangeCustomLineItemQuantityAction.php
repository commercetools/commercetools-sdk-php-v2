<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartChangeCustomLineItemQuantityAction extends CartUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_CUSTOM_LINE_ITEM_KEY = 'customLineItemKey';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemKey();

    /**
     * <p>New value to set.</p>
     * <p>If <code>0</code>, the Custom Line Item is removed from the Cart.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?string $customLineItemKey
     */
    public function setCustomLineItemKey(?string $customLineItemKey): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
