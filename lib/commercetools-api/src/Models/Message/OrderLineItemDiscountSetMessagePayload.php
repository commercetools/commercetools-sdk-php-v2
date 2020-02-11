<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderLineItemDiscountSetMessagePayload extends MessagePayload
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * @return null|Money
     */
    public function getTotalPrice();

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    public function setLineItemId(?string $lineItemId): void;

    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;

    public function setTotalPrice(?Money $totalPrice): void;

    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;
}
