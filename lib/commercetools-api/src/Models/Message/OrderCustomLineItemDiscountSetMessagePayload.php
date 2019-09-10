<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;

interface OrderCustomLineItemDiscountSetMessagePayload extends MessagePayload
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    const FIELD_TAXED_PRICE = 'taxedPrice';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    public function getDiscountedPricePerQuantity();
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    public function getTaxedPrice();
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;
    
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;
}