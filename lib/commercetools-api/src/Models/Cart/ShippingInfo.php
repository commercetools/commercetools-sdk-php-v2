<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingRate;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Base\JsonObject;

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
     * @return null|string
     */
    public function getShippingMethodName();

    /**
     * @return null|TypedMoney
     */
    public function getPrice();

    /**
     * @return null|ShippingRate
     */
    public function getShippingRate();

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return null|ShippingMethodReference
     */
    public function getShippingMethod();

    /**
     * @return null|DeliveryCollection
     */
    public function getDeliveries();

    /**
     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice();

    /**
     * @return null|string
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
