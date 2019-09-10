<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReferenceModel;
use Commercetools\Api\Models\ShippingMethod\ShippingRate;
use Commercetools\Api\Models\ShippingMethod\ShippingRateModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;

final class ShippingInfoModel extends JsonObjectModel implements ShippingInfo
{
    
    public function __construct(
        TaxRate $taxRate = null,
        ShippingRate $shippingRate = null,
        DiscountedLineItemPrice $discountedPrice = null,
        string $shippingMethodState = null,
        TaxedItemPrice $taxedPrice = null,
        TypedMoney $price = null,
        ShippingMethodReference $shippingMethod = null,
        string $shippingMethodName = null,
        DeliveryCollection $deliveries = null,
        TaxCategoryReference $taxCategory = null
    ) {
        $this->taxRate = $taxRate;
        $this->shippingRate = $shippingRate;
        $this->discountedPrice = $discountedPrice;
        $this->shippingMethodState = $shippingMethodState;
        $this->taxedPrice = $taxedPrice;
        $this->price = $price;
        $this->shippingMethod = $shippingMethod;
        $this->shippingMethodName = $shippingMethodName;
        $this->deliveries = $deliveries;
        $this->taxCategory = $taxCategory;
        
    }

    /**
     * @var ?TaxRate
     */
    protected $taxRate;
    
    /**
     * @var ?ShippingRate
     */
    protected $shippingRate;
    
    /**
     * @var ?DiscountedLineItemPrice
     */
    protected $discountedPrice;
    
    /**
     * @var ?string
     */
    protected $shippingMethodState;
    
    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?TypedMoney
     */
    protected $price;
    
    /**
     * @var ?ShippingMethodReference
     */
    protected $shippingMethod;
    
    /**
     * @var ?string
     */
    protected $shippingMethodName;
    
    /**
     * @var ?DeliveryCollection
     */
    protected $deliveries;
    
    /**
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

    /**
     *
     * @return TaxRate|null
     */
    final public function getTaxRate()
    {
       if (is_null($this->taxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfo::FIELD_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxRate = TaxRateModel::of($data);
       }
       return $this->taxRate;
    }
    
    /**
     *
     * @return ShippingRate|null
     */
    final public function getShippingRate()
    {
       if (is_null($this->shippingRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfo::FIELD_SHIPPING_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingRate = ShippingRateModel::of($data);
       }
       return $this->shippingRate;
    }
    
    /**
     *
     * @return DiscountedLineItemPrice|null
     */
    final public function getDiscountedPrice()
    {
       if (is_null($this->discountedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfo::FIELD_DISCOUNTED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->discountedPrice = DiscountedLineItemPriceModel::of($data);
       }
       return $this->discountedPrice;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getShippingMethodState()
    {
       if (is_null($this->shippingMethodState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->shippingMethodState = (string)$data;
       }
       return $this->shippingMethodState;
    }
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    final public function getTaxedPrice()
    {
       if (is_null($this->taxedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfo::FIELD_TAXED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxedPrice = TaxedItemPriceModel::of($data);
       }
       return $this->taxedPrice;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfo::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           $className = TypedMoneyModel::resolveDiscriminatorClass($data);
           $this->price = $className::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return ShippingMethodReference|null
     */
    final public function getShippingMethod()
    {
       if (is_null($this->shippingMethod)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingMethod = ShippingMethodReferenceModel::of($data);
       }
       return $this->shippingMethod;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getShippingMethodName()
    {
       if (is_null($this->shippingMethodName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->shippingMethodName = (string)$data;
       }
       return $this->shippingMethodName;
    }
    
    /**
     *
     * @return DeliveryCollection|null
     */
    final public function getDeliveries()
    {
       if (is_null($this->deliveries)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ShippingInfo::FIELD_DELIVERIES);
           if (is_null($data)) {
               return null;
           }
           $this->deliveries = DeliveryCollection::fromArray($data);
       }
       return $this->deliveries;
    }
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfo::FIELD_TAX_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxCategory = TaxCategoryReferenceModel::of($data);
       }
       return $this->taxCategory;
    }
    final public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
    
    final public function setShippingRate(?ShippingRate $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }
    
    final public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }
    
    final public function setShippingMethodState(?string $shippingMethodState): void
    {
        $this->shippingMethodState = $shippingMethodState;
    }
    
    final public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }
    
    final public function setPrice(?TypedMoney $price): void
    {
        $this->price = $price;
    }
    
    final public function setShippingMethod(?ShippingMethodReference $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }
    
    final public function setShippingMethodName(?string $shippingMethodName): void
    {
        $this->shippingMethodName = $shippingMethodName;
    }
    
    final public function setDeliveries(?DeliveryCollection $deliveries): void
    {
        $this->deliveries = $deliveries;
    }
    
    final public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    
}