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
use Commercetools\Api\Models\Common\Money;

interface OrderLineItemDiscountSetMessage extends Message
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_TAXED_PRICE = 'taxedPrice';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    public function getDiscountedPricePerQuantity();
    
    /**
     *
     * @return Money|null
     */
    public function getTotalPrice();
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    public function getTaxedPrice();
    public function setLineItemId(?string $lineItemId): void;
    
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;
    
    public function setTotalPrice(?Money $totalPrice): void;
    
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;
}