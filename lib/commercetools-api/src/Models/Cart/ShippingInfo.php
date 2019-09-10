<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingRate;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxRate;

interface ShippingInfo extends JsonObject
{
    
    const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    const FIELD_PRICE = 'price';
    const FIELD_SHIPPING_RATE = 'shippingRate';
    const FIELD_TAXED_PRICE = 'taxedPrice';
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
     * @return TypedMoney|null
     */
    public function getPrice();
    
    /**
     *
     * @return ShippingRate|null
     */
    public function getShippingRate();
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    public function getTaxedPrice();
    
    /**
     *
     * @return TaxRate|null
     */
    public function getTaxRate();
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return ShippingMethodReference|null
     */
    public function getShippingMethod();
    
    /**
     *
     * @return DeliveryCollection|null
     */
    public function getDeliveries();
    
    /**
     *
     * @return DiscountedLineItemPrice|null
     */
    public function getDiscountedPrice();
    
    /**
     *
     * @return string|null
     */
    public function getShippingMethodState();
    public function setShippingMethodName(?string $shippingMethodName): void;
    
    public function setPrice(?TypedMoney $price): void;
    
    public function setShippingRate(?ShippingRate $shippingRate): void;
    
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;
    
    public function setTaxRate(?TaxRate $taxRate): void;
    
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;
    
    public function setShippingMethod(?ShippingMethodReference $shippingMethod): void;
    
    public function setDeliveries(?DeliveryCollection $deliveries): void;
    
    public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void;
    
    public function setShippingMethodState(?string $shippingMethodState): void;
}