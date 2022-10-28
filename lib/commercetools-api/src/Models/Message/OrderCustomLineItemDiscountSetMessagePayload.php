<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomLineItemDiscountSetMessagePayload extends OrderMessagePayload
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_TAXED_PRICE = 'taxedPrice';

    /**
     * <p>Unique identifier for the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p>Array of <a href="ctp:api:type:DiscountedLineItemPriceForQuantity">DiscountedLineItemPriceForQuantity</a> after the Discount recalculation.</p>
     *

     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * <p><a href="ctp:api:type:TaxedItemPrice">TaxedItemPrice</a> of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a> after the Discount recalculation.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;
}
