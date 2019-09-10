<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxRate;

interface ShippingInfoImportDraft extends JsonObject
{
    
    const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    const FIELD_PRICE = 'price';
    const FIELD_SHIPPING_RATE = 'shippingRate';
    const FIELD_TAX_RATE = 'taxRate';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_SHIPPING_METHOD = 'shippingMethod';
    const FIELD_DELIVERIES = 'deliveries';
    const FIELD_DISCOUNTED_PRICE = 'discountedPrice';
    const FIELD_SHIPPING_METHOD_STATE = 'shippingMethodState';

    /**
     *
     * @return string|null
     */
    public function getShippingMethodName();
    
    /**
     *
     * @return Money|null
     */
    public function getPrice();
    
    /**
     *
     * @return ShippingRateDraft|null
     */
    public function getShippingRate();
    
    /**
     *
     * @return TaxRate|null
     */
    public function getTaxRate();
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    public function getShippingMethod();
    
    /**
     *
     * @return DeliveryCollection|null
     */
    public function getDeliveries();
    
    /**
     *
     * @return DiscountedLineItemPriceDraft|null
     */
    public function getDiscountedPrice();
    
    /**
     *
     * @return string|null
     */
    public function getShippingMethodState();
    public function setShippingMethodName(?string $shippingMethodName): void;
    
    public function setPrice(?Money $price): void;
    
    public function setShippingRate(?ShippingRateDraft $shippingRate): void;
    
    public function setTaxRate(?TaxRate $taxRate): void;
    
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
    
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;
    
    public function setDeliveries(?DeliveryCollection $deliveries): void;
    
    public function setDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice): void;
    
    public function setShippingMethodState(?string $shippingMethodState): void;
}