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
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierBuilder;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;

/**
 * @implements Builder<CartDraft>
 */
final class CartDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?string
     */
    protected $anonymousId;
    
    /**
     * @var ?ShippingRateInputDraftBuilder|ShippingRateInputDraft
     */
    protected $shippingRateInput;
    
    /**
     * @var ?CustomerGroupResourceIdentifierBuilder|CustomerGroupResourceIdentifier
     */
    protected $customerGroup;
    
    /**
     * @var ?string
     */
    protected $origin;
    
    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?ShippingMethodResourceIdentifierBuilder|ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;
    
    /**
     * @var ?string
     */
    protected $taxCalculationMode;
    
    /**
     * @var ?StoreResourceIdentifierBuilder|StoreResourceIdentifier
     */
    protected $store;
    
    /**
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?ExternalTaxRateDraftBuilder|ExternalTaxRateDraft
     */
    protected $externalTaxRateForShippingMethod;
    
    /**
     * @var ?string
     */
    protected $inventoryMode;
    
    /**
     * @var ?LineItemDraftCollection
     */
    protected $lineItems;
    
    /**
     * @var ?string
     */
    protected $taxRoundingMode;
    
    /**
     * @var ?CustomLineItemDraftCollection
     */
    protected $customLineItems;
    
    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;
    
    /**
     * @var ?string
     */
    protected $taxMode;
    
    /**
     * @var ?string
     */
    protected $customerEmail;
    
    /**
     * @var ?string
     */
    protected $customerId;
    
    /**
     * @var ?AddressBuilder|Address
     */
    protected $shippingAddress;
    
    /**
     * @var ?string
     */
    protected $currency;
    
    /**
     * @var ?AddressBuilder|Address
     */
    protected $billingAddress;

    /**
     *
     * @return string|null
     */
    final public function getCountry()
    {
       return $this->country;
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
     * @return ShippingRateInputDraft|null
     */
    final public function getShippingRateInput()
    {
       return ($this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput);
    }
    
    /**
     *
     * @return CustomerGroupResourceIdentifier|null
     */
    final public function getCustomerGroup()
    {
       return ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup);
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
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    final public function getShippingMethod()
    {
       return ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod);
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
     * @return StoreResourceIdentifier|null
     */
    final public function getStore()
    {
       return ($this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store);
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
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRateForShippingMethod()
    {
       return ($this->externalTaxRateForShippingMethod instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRateForShippingMethod->build() : $this->externalTaxRateForShippingMethod);
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
     * @return LineItemDraftCollection|null
     */
    final public function getLineItems()
    {
       return $this->lineItems;
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
     * @return CustomLineItemDraftCollection|null
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
    final public function getTaxMode()
    {
       return $this->taxMode;
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
    final public function getCustomerId()
    {
       return $this->customerId;
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
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     * @return string|null
     */
    final public function getCurrency()
    {
       return $this->currency;
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
    final public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRateInput(?ShippingRateInputDraft $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
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
    final public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        
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
    final public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;
        
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
    final public function withExternalTaxRateForShippingMethod(?ExternalTaxRateDraft $externalTaxRateForShippingMethod)
    {
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;
        
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
    final public function withLineItems(?LineItemDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;
        
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
    final public function withCustomLineItems(?CustomLineItemDraftCollection $customLineItems)
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
    final public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;
        
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
    final public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;
        
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
    final public function withCurrency(?string $currency)
    {
        $this->currency = $currency;
        
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
    final public function withShippingRateInputBuilder(?ShippingRateInputDraftBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethodBuilder(?ShippingMethodResourceIdentifierBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalTaxRateForShippingMethodBuilder(?ExternalTaxRateDraftBuilder $externalTaxRateForShippingMethod)
    {
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;
        
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
    
    public function build(): CartDraft {
        return new CartDraftModel(
            $this->country,
            $this->anonymousId,
            ($this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput),
            ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup),
            $this->origin,
            $this->deleteDaysAfterLastModification,
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod),
            $this->taxCalculationMode,
            ($this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store),
            $this->locale,
            ($this->externalTaxRateForShippingMethod instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRateForShippingMethod->build() : $this->externalTaxRateForShippingMethod),
            $this->inventoryMode,
            $this->lineItems,
            $this->taxRoundingMode,
            $this->customLineItems,
            $this->itemShippingAddresses,
            $this->taxMode,
            $this->customerEmail,
            $this->customerId,
            ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress),
            $this->currency,
            ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress)
        );
    }
    
    public static function of(): CartDraftBuilder
    {
        return new self();
    }
}