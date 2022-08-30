<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\MethodTaxedPriceCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderLineItemDiscountSetMessagePayload extends OrderMessagePayload
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TAXED_PRICE_PORTIONS = 'taxedPricePortions';

    /**
     * <p>Unique identifier for the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>Array of <a href="ctp:api:type:DiscountedLineItemPriceForQuantity">DiscountedLineItemPriceForQuantity</a> after the Discount recalculation.</p>
     *

     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * <p>Total Price of the <a href="ctp:api:type:LineItem">Line Item</a> after the Discount recalculation.</p>
     *

     * @return null|Money
     */
    public function getTotalPrice();

    /**
     * <p><a href="ctp:api:type:TaxedItemPrice">TaxedItemPrice</a> of the <a href="ctp:api:type:LineItem">Line Item</a> after the Discount recalculation.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Taxed price of the Shipping Methods in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>..</p>
     *

     * @return null|MethodTaxedPriceCollection
     */
    public function getTaxedPricePortions();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;

    /**
     * @param ?Money $totalPrice
     */
    public function setTotalPrice(?Money $totalPrice): void;

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;

    /**
     * @param ?MethodTaxedPriceCollection $taxedPricePortions
     */
    public function setTaxedPricePortions(?MethodTaxedPriceCollection $taxedPricePortions): void;
}
