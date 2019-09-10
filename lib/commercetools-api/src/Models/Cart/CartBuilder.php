<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<Cart>
 */
final class CartBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?CreatedByBuilder|CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedByBuilder|LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $totalPrice;
    
    /**
     * @var ?ShippingRateInputBuilder|ShippingRateInput
     */
    protected $shippingRateInput;
    
    /**
     * @var ?TaxedPriceBuilder|TaxedPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?string
     */
    protected $origin;
    
    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;
    
    /**
     * @var ?ShippingInfoBuilder|ShippingInfo
     */
    protected $shippingInfo;
    
    /**
     * @var ?CartDiscountReferenceCollection
     */
    protected $refusedGifts;
    
    /**
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?string
     */
    protected $inventoryMode;
    
    /**
     * @var ?LineItemCollection
     */
    protected $lineItems;
    
    /**
     * @var ?CustomLineItemCollection
     */
    protected $customLineItems;
    
    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;
    
    /**
     * @var ?string
     */
    protected $customerEmail;
    
    /**
     * @var ?string
     */
    protected $cartState;
    
    /**
     * @var ?string
     */
    protected $customerId;
    
    /**
     * @var ?string
     */
    protected $anonymousId;
    
    /**
     * @var ?DiscountCodeInfoCollection
     */
    protected $discountCodes;
    
    /**
     * @var ?CustomerGroupReferenceBuilder|CustomerGroupReference
     */
    protected $customerGroup;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
     */
    protected $custom;
    
    /**
     * @var ?string
     */
    protected $taxCalculationMode;
    
    /**
     * @var ?StoreKeyReferenceBuilder|StoreKeyReference
     */
    protected $store;
    
    /**
     * @var ?string
     */
    protected $taxRoundingMode;
    
    /**
     * @var ?string
     */
    protected $taxMode;
    
    /**
     * @var ?AddressBuilder|Address
     */
    protected $shippingAddress;
    
    /**
     * @var ?AddressBuilder|Address
     */
    protected $billingAddress;
    
    /**
     * @var ?PaymentInfoBuilder|PaymentInfo
     */
    protected $paymentInfo;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    
    /**
     *
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       return ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy);
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       return ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy);
    }
    
    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     * @return string|null
     */
    final public function getCountry()
    {
       return $this->country;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getTotalPrice()
    {
       return ($this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice);
    }
    
    /**
     *
     * @return ShippingRateInput|null
     */
    final public function getShippingRateInput()
    {
       return ($this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput);
    }
    
    /**
     *
     * @return TaxedPrice|null
     */
    final public function getTaxedPrice()
    {
       return ($this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrigin()
    {
       return $this->origin;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterLastModification()
    {
       return $this->deleteDaysAfterLastModification;
    }
    
    /**
     *
     * @return ShippingInfo|null
     */
    final public function getShippingInfo()
    {
       return ($this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo);
    }
    
    /**
     *
     * @return CartDiscountReferenceCollection|null
     */
    final public function getRefusedGifts()
    {
       return $this->refusedGifts;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       return $this->locale;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInventoryMode()
    {
       return $this->inventoryMode;
    }
    
    /**
     *
     * @return LineItemCollection|null
     */
    final public function getLineItems()
    {
       return $this->lineItems;
    }
    
    /**
     *
     * @return CustomLineItemCollection|null
     */
    final public function getCustomLineItems()
    {
       return $this->customLineItems;
    }
    
    /**
     *
     * @return AddressCollection|null
     */
    final public function getItemShippingAddresses()
    {
       return $this->itemShippingAddresses;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerEmail()
    {
       return $this->customerEmail;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCartState()
    {
       return $this->cartState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerId()
    {
       return $this->customerId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       return $this->anonymousId;
    }
    
    /**
     *
     * @return DiscountCodeInfoCollection|null
     */
    final public function getDiscountCodes()
    {
       return $this->discountCodes;
    }
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    final public function getCustomerGroup()
    {
       return ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup);
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxCalculationMode()
    {
       return $this->taxCalculationMode;
    }
    
    /**
     *
     * @return StoreKeyReference|null
     */
    final public function getStore()
    {
       return ($this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxRoundingMode()
    {
       return $this->taxRoundingMode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxMode()
    {
       return $this->taxMode;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getShippingAddress()
    {
       return ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress);
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getBillingAddress()
    {
       return ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress);
    }
    
    /**
     *
     * @return PaymentInfo|null
     */
    final public function getPaymentInfo()
    {
       return ($this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo);
    }
    /**
     * @return $this
     */
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCountry(?string $country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalPrice(?TypedMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRateInput(?ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPrice(?TaxedPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOrigin(?string $origin)
    {
        $this->origin = $origin;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingInfo(?ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withRefusedGifts(?CartDiscountReferenceCollection $refusedGifts)
    {
        $this->refusedGifts = $refusedGifts;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLocale(?string $locale)
    {
        $this->locale = $locale;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLineItems(?LineItemCollection $lineItems)
    {
        $this->lineItems = $lineItems;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomLineItems(?CustomLineItemCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withItemShippingAddresses(?AddressCollection $itemShippingAddresses)
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCartState(?string $cartState)
    {
        $this->cartState = $cartState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountCodes(?DiscountCodeInfoCollection $discountCodes)
    {
        $this->discountCodes = $discountCodes;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingAddress(?Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withBillingAddress(?Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentInfo(?PaymentInfo $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalPriceBuilder(?TypedMoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRateInputBuilder(?ShippingRateInputBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPriceBuilder(?TaxedPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingInfoBuilder(?ShippingInfoBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingAddressBuilder(?AddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withBillingAddressBuilder(?AddressBuilder $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentInfoBuilder(?PaymentInfoBuilder $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;
        
        return $this;
    }
    
    public function build(): Cart {
        return new CartModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->id,
            $this->version,
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            $this->country,
            ($this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            ($this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput),
            ($this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice),
            $this->origin,
            $this->deleteDaysAfterLastModification,
            ($this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo),
            $this->refusedGifts,
            $this->locale,
            $this->inventoryMode,
            $this->lineItems,
            $this->customLineItems,
            $this->itemShippingAddresses,
            $this->customerEmail,
            $this->cartState,
            $this->customerId,
            $this->anonymousId,
            $this->discountCodes,
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->taxCalculationMode,
            ($this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store),
            $this->taxRoundingMode,
            $this->taxMode,
            ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress),
            ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress),
            ($this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo)
        );
    }
    
    public static function of(): CartBuilder
    {
        return new self();
    }
}