<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\TaxCategory\TaxRate;
use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\ShippingMethod\ShippingMethodReference;
use Commercetools\Types\Order\DeliveryCollection;
use Commercetools\Types\Common\TypedMoney;
use Commercetools\Types\Order\Delivery;
use Commercetools\Types\ShippingMethod\ShippingRate;

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
     * @return string
     */
    public function getShippingMethodName();

    /**
     * @return TypedMoney
     */
    public function getPrice();

    /**
     * @return ShippingRate
     */
    public function getShippingRate();

    /**
     * @return TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * @return TaxRate
     */
    public function getTaxRate();

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return ShippingMethodReference
     */
    public function getShippingMethod();

    /**
     * @return DeliveryCollection
     */
    public function getDeliveries();

    /**
     * @return DiscountedLineItemPrice
     */
    public function getDiscountedPrice();

    /**
     * @return string
     */
    public function getShippingMethodState();

    /**
     * @param string $shippingMethodName
     * @return $this
     */
    public function setShippingMethodName(string $shippingMethodName);

    /**
     * @param TypedMoney $price
     * @return $this
     */
    public function setPrice(TypedMoney $price);

    /**
     * @param ShippingRate $shippingRate
     * @return $this
     */
    public function setShippingRate(ShippingRate $shippingRate);

    /**
     * @param TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedItemPrice $taxedPrice);

    /**
     * @param TaxRate $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRate $taxRate);

    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

    /**
     * @param ShippingMethodReference $shippingMethod
     * @return $this
     */
    public function setShippingMethod(ShippingMethodReference $shippingMethod);

    /**
     * @param DeliveryCollection $deliveries
     * @return $this
     */
    public function setDeliveries(DeliveryCollection $deliveries);

    /**
     * @param DiscountedLineItemPrice $discountedPrice
     * @return $this
     */
    public function setDiscountedPrice(DiscountedLineItemPrice $discountedPrice);

    /**
     * @param string $shippingMethodState
     * @return $this
     */
    public function setShippingMethodState(string $shippingMethodState);

}
