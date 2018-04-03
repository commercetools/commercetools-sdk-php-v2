<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\TaxCategory\TaxRate;
use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\ShippingMethod\ShippingMethodReference;
use Commercetools\Types\Order\DeliveryCollection;
use Commercetools\Types\Common\TypedMoney;
use Commercetools\Types\Order\Delivery;
use Commercetools\Types\ShippingMethod\ShippingRate;

class ShippingInfoModel extends JsonObjectModel implements ShippingInfo {
    /**
     * @var string
     */
    protected $shippingMethodName;
    /**
     * @var TypedMoney
     */
    protected $price;
    /**
     * @var ShippingRate
     */
    protected $shippingRate;
    /**
     * @var TaxedItemPrice
     */
    protected $taxedPrice;
    /**
     * @var TaxRate
     */
    protected $taxRate;
    /**
     * @var TaxCategoryReference
     */
    protected $taxCategory;
    /**
     * @var ShippingMethodReference
     */
    protected $shippingMethod;
    /**
     * @var DeliveryCollection
     */
    protected $deliveries;
    /**
     * @var DiscountedLineItemPrice
     */
    protected $discountedPrice;
    /**
     * @var string
     */
    protected $shippingMethodState;

    /**
     * @return string
     */
    public function getShippingMethodName()
    {
        if (is_null($this->shippingMethodName)) {
            $value = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD_NAME);
            $value = (string)$value;
            $this->shippingMethodName = $value;
        }
        return $this->shippingMethodName;
    }
    /**
     * @return TypedMoney
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(ShippingInfo::FIELD_PRICE);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return ShippingRate
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            $value = $this->raw(ShippingInfo::FIELD_SHIPPING_RATE);
            if (is_null($value)) {
                return $this->mapData(ShippingRate::class, null);
            }
            $value = $this->mapData(ShippingRate::class, $value);

            $this->shippingRate = $value;
        }
        return $this->shippingRate;
    }
    /**
     * @return TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            $value = $this->raw(ShippingInfo::FIELD_TAXED_PRICE);
            if (is_null($value)) {
                return $this->mapData(TaxedItemPrice::class, null);
            }
            $value = $this->mapData(TaxedItemPrice::class, $value);

            $this->taxedPrice = $value;
        }
        return $this->taxedPrice;
    }
    /**
     * @return TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            $value = $this->raw(ShippingInfo::FIELD_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(TaxRate::class, null);
            }
            $value = $this->mapData(TaxRate::class, $value);

            $this->taxRate = $value;
        }
        return $this->taxRate;
    }
    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw(ShippingInfo::FIELD_TAX_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryReference::class, null);
            }
            $value = $this->mapData(TaxCategoryReference::class, $value);

            $this->taxCategory = $value;
        }
        return $this->taxCategory;
    }
    /**
     * @return ShippingMethodReference
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            $value = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD);
            if (is_null($value)) {
                return $this->mapData(ShippingMethodReference::class, null);
            }
            $value = $this->mapData(ShippingMethodReference::class, $value);

            $this->shippingMethod = $value;
        }
        return $this->shippingMethod;
    }
    /**
     * @return DeliveryCollection
     */
    public function getDeliveries()
    {
        if (is_null($this->deliveries)) {
            $value = $this->raw(ShippingInfo::FIELD_DELIVERIES);
            if (is_null($value)) {
                return $this->mapData(DeliveryCollection::class, null);
            }
            $value = $this->mapData(DeliveryCollection::class, $value);
            $this->deliveries = $value;
        }
        return $this->deliveries;
    }
    /**
     * @return DiscountedLineItemPrice
     */
    public function getDiscountedPrice()
    {
        if (is_null($this->discountedPrice)) {
            $value = $this->raw(ShippingInfo::FIELD_DISCOUNTED_PRICE);
            if (is_null($value)) {
                return $this->mapData(DiscountedLineItemPrice::class, null);
            }
            $value = $this->mapData(DiscountedLineItemPrice::class, $value);

            $this->discountedPrice = $value;
        }
        return $this->discountedPrice;
    }
    /**
     * @return string
     */
    public function getShippingMethodState()
    {
        if (is_null($this->shippingMethodState)) {
            $value = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD_STATE);
            $value = (string)$value;
            $this->shippingMethodState = $value;
        }
        return $this->shippingMethodState;
    }

    /**
     * @param string $shippingMethodName
     * @return $this
     */
    public function setShippingMethodName(string $shippingMethodName)
    {
        $this->shippingMethodName = (string)$shippingMethodName;

        return $this;
    }
    /**
     * @param TypedMoney $price
     * @return $this
     */
    public function setPrice(TypedMoney $price)
    {
        $this->price = $price;

        return $this;
    }
    /**
     * @param ShippingRate $shippingRate
     * @return $this
     */
    public function setShippingRate(ShippingRate $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }
    /**
     * @param TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }
    /**
     * @param TaxRate $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }
    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }
    /**
     * @param ShippingMethodReference $shippingMethod
     * @return $this
     */
    public function setShippingMethod(ShippingMethodReference $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }
    /**
     * @param DeliveryCollection $deliveries
     * @return $this
     */
    public function setDeliveries(DeliveryCollection $deliveries)
    {
        $this->deliveries = $deliveries;

        return $this;
    }
    /**
     * @param DiscountedLineItemPrice $discountedPrice
     * @return $this
     */
    public function setDiscountedPrice(DiscountedLineItemPrice $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }
    /**
     * @param string $shippingMethodState
     * @return $this
     */
    public function setShippingMethodState(string $shippingMethodState)
    {
        $this->shippingMethodState = (string)$shippingMethodState;

        return $this;
    }

}
