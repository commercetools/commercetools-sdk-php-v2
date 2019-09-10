<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;

final class ShippingInfoImportDraftModel extends JsonObjectModel implements ShippingInfoImportDraft
{
    
    public function __construct(
        TaxRate $taxRate = null,
        ShippingRateDraft $shippingRate = null,
        DiscountedLineItemPriceDraft $discountedPrice = null,
        string $shippingMethodState = null,
        Money $price = null,
        ShippingMethodResourceIdentifier $shippingMethod = null,
        string $shippingMethodName = null,
        DeliveryCollection $deliveries = null,
        TaxCategoryResourceIdentifier $taxCategory = null
    ) {
        $this->taxRate = $taxRate;
        $this->shippingRate = $shippingRate;
        $this->discountedPrice = $discountedPrice;
        $this->shippingMethodState = $shippingMethodState;
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
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;
    
    /**
     * @var ?DiscountedLineItemPriceDraft
     */
    protected $discountedPrice;
    
    /**
     * @var ?string
     */
    protected $shippingMethodState;
    
    /**
     * @var ?Money
     */
    protected $price;
    
    /**
     * @var ?ShippingMethodResourceIdentifier
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
     * @var ?TaxCategoryResourceIdentifier
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
           $data = $this->raw(ShippingInfoImportDraft::FIELD_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxRate = TaxRateModel::of($data);
       }
       return $this->taxRate;
    }
    
    /**
     *
     * @return ShippingRateDraft|null
     */
    final public function getShippingRate()
    {
       if (is_null($this->shippingRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfoImportDraft::FIELD_SHIPPING_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingRate = ShippingRateDraftModel::of($data);
       }
       return $this->shippingRate;
    }
    
    /**
     *
     * @return DiscountedLineItemPriceDraft|null
     */
    final public function getDiscountedPrice()
    {
       if (is_null($this->discountedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfoImportDraft::FIELD_DISCOUNTED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->discountedPrice = DiscountedLineItemPriceDraftModel::of($data);
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
           $data = $this->raw(ShippingInfoImportDraft::FIELD_SHIPPING_METHOD_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->shippingMethodState = (string)$data;
       }
       return $this->shippingMethodState;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfoImportDraft::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->price = MoneyModel::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    final public function getShippingMethod()
    {
       if (is_null($this->shippingMethod)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfoImportDraft::FIELD_SHIPPING_METHOD);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingMethod = ShippingMethodResourceIdentifierModel::of($data);
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
           $data = $this->raw(ShippingInfoImportDraft::FIELD_SHIPPING_METHOD_NAME);
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
           $data = $this->raw(ShippingInfoImportDraft::FIELD_DELIVERIES);
           if (is_null($data)) {
               return null;
           }
           $this->deliveries = DeliveryCollection::fromArray($data);
       }
       return $this->deliveries;
    }
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingInfoImportDraft::FIELD_TAX_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
       }
       return $this->taxCategory;
    }
    final public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
    
    final public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }
    
    final public function setDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }
    
    final public function setShippingMethodState(?string $shippingMethodState): void
    {
        $this->shippingMethodState = $shippingMethodState;
    }
    
    final public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }
    
    final public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
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
    
    final public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    
}