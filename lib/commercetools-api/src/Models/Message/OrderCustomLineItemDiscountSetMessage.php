<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;

interface OrderCustomLineItemDiscountSetMessage extends Message
{

    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_TAXED_PRICE = 'taxedPrice';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;

    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;
}
