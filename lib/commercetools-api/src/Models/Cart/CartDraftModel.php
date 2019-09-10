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

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class CartDraftModel extends JsonObjectModel implements CartDraft
{
    
    public function __construct(
        string $country = null,
        string $anonymousId = null,
        ShippingRateInputDraft $shippingRateInput = null,
        CustomerGroupResourceIdentifier $customerGroup = null,
        string $origin = null,
        int $deleteDaysAfterLastModification = null,
        CustomFieldsDraft $custom = null,
        ShippingMethodResourceIdentifier $shippingMethod = null,
        string $taxCalculationMode = null,
        StoreResourceIdentifier $store = null,
        string $locale = null,
        ExternalTaxRateDraft $externalTaxRateForShippingMethod = null,
        string $inventoryMode = null,
        LineItemDraftCollection $lineItems = null,
        string $taxRoundingMode = null,
        CustomLineItemDraftCollection $customLineItems = null,
        AddressCollection $itemShippingAddresses = null,
        string $taxMode = null,
        string $customerEmail = null,
        string $customerId = null,
        Address $shippingAddress = null,
        string $currency = null,
        Address $billingAddress = null
    ) {
        $this->country = $country;
        $this->anonymousId = $anonymousId;
        $this->shippingRateInput = $shippingRateInput;
        $this->customerGroup = $customerGroup;
        $this->origin = $origin;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->custom = $custom;
        $this->shippingMethod = $shippingMethod;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->store = $store;
        $this->locale = $locale;
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;
        $this->inventoryMode = $inventoryMode;
        $this->lineItems = $lineItems;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->customLineItems = $customLineItems;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->taxMode = $taxMode;
        $this->customerEmail = $customerEmail;
        $this->customerId = $customerId;
        $this->shippingAddress = $shippingAddress;
        $this->currency = $currency;
        $this->billingAddress = $billingAddress;
        
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
     * @var ?ShippingRateInputDraft
     */
    protected $shippingRateInput;
    
    /**
     * @var ?CustomerGroupResourceIdentifier
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
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;
    
    /**
     * @var ?string
     */
    protected $taxCalculationMode;
    
    /**
     * @var ?StoreResourceIdentifier
     */
    protected $store;
    
    /**
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?ExternalTaxRateDraft
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
     * @var ?Address
     */
    protected $shippingAddress;
    
    /**
     * @var ?string
     */
    protected $currency;
    
    /**
     * @var ?Address
     */
    protected $billingAddress;

    /**
     *
     * @return string|null
     */
    final public function getCountry()
    {
       if (is_null($this->country)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_COUNTRY);
           if (is_null($data)) {
               return null;
           }
           $this->country = (string)$data;
       }
       return $this->country;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       if (is_null($this->anonymousId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_ANONYMOUS_ID);
           if (is_null($data)) {
               return null;
           }
           $this->anonymousId = (string)$data;
       }
       return $this->anonymousId;
    }
    
    /**
     *
     * @return ShippingRateInputDraft|null
     */
    final public function getShippingRateInput()
    {
       if (is_null($this->shippingRateInput)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDraft::FIELD_SHIPPING_RATE_INPUT);
           if (is_null($data)) {
               return null;
           }
           $className = ShippingRateInputDraftModel::resolveDiscriminatorClass($data);
           $this->shippingRateInput = $className::of($data);
       }
       return $this->shippingRateInput;
    }
    
    /**
     *
     * @return CustomerGroupResourceIdentifier|null
     */
    final public function getCustomerGroup()
    {
       if (is_null($this->customerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDraft::FIELD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->customerGroup = CustomerGroupResourceIdentifierModel::of($data);
       }
       return $this->customerGroup;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrigin()
    {
       if (is_null($this->origin)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_ORIGIN);
           if (is_null($data)) {
               return null;
           }
           $this->origin = (string)$data;
       }
       return $this->origin;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterLastModification()
    {
       if (is_null($this->deleteDaysAfterLastModification)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CartDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
           if (is_null($data)) {
               return null;
           }
           $this->deleteDaysAfterLastModification = (int)$data;
       }
       return $this->deleteDaysAfterLastModification;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    final public function getShippingMethod()
    {
       if (is_null($this->shippingMethod)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDraft::FIELD_SHIPPING_METHOD);
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
    final public function getTaxCalculationMode()
    {
       if (is_null($this->taxCalculationMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_TAX_CALCULATION_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxCalculationMode = (string)$data;
       }
       return $this->taxCalculationMode;
    }
    
    /**
     *
     * @return StoreResourceIdentifier|null
     */
    final public function getStore()
    {
       if (is_null($this->store)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDraft::FIELD_STORE);
           if (is_null($data)) {
               return null;
           }
           
           $this->store = StoreResourceIdentifierModel::of($data);
       }
       return $this->store;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       if (is_null($this->locale)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_LOCALE);
           if (is_null($data)) {
               return null;
           }
           $this->locale = (string)$data;
       }
       return $this->locale;
    }
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRateForShippingMethod()
    {
       if (is_null($this->externalTaxRateForShippingMethod)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDraft::FIELD_EXTERNAL_TAX_RATE_FOR_SHIPPING_METHOD);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTaxRateForShippingMethod = ExternalTaxRateDraftModel::of($data);
       }
       return $this->externalTaxRateForShippingMethod;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInventoryMode()
    {
       if (is_null($this->inventoryMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_INVENTORY_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->inventoryMode = (string)$data;
       }
       return $this->inventoryMode;
    }
    
    /**
     *
     * @return LineItemDraftCollection|null
     */
    final public function getLineItems()
    {
       if (is_null($this->lineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CartDraft::FIELD_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->lineItems = LineItemDraftCollection::fromArray($data);
       }
       return $this->lineItems;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxRoundingMode()
    {
       if (is_null($this->taxRoundingMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_TAX_ROUNDING_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxRoundingMode = (string)$data;
       }
       return $this->taxRoundingMode;
    }
    
    /**
     *
     * @return CustomLineItemDraftCollection|null
     */
    final public function getCustomLineItems()
    {
       if (is_null($this->customLineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CartDraft::FIELD_CUSTOM_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItems = CustomLineItemDraftCollection::fromArray($data);
       }
       return $this->customLineItems;
    }
    
    /**
     *
     * @return AddressCollection|null
     */
    final public function getItemShippingAddresses()
    {
       if (is_null($this->itemShippingAddresses)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CartDraft::FIELD_ITEM_SHIPPING_ADDRESSES);
           if (is_null($data)) {
               return null;
           }
           $this->itemShippingAddresses = AddressCollection::fromArray($data);
       }
       return $this->itemShippingAddresses;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxMode()
    {
       if (is_null($this->taxMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_TAX_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxMode = (string)$data;
       }
       return $this->taxMode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerEmail()
    {
       if (is_null($this->customerEmail)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_CUSTOMER_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->customerEmail = (string)$data;
       }
       return $this->customerEmail;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerId()
    {
       if (is_null($this->customerId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_CUSTOMER_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customerId = (string)$data;
       }
       return $this->customerId;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getShippingAddress()
    {
       if (is_null($this->shippingAddress)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDraft::FIELD_SHIPPING_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingAddress = AddressModel::of($data);
       }
       return $this->shippingAddress;
    }
    
    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     * @return string|null
     */
    final public function getCurrency()
    {
       if (is_null($this->currency)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDraft::FIELD_CURRENCY);
           if (is_null($data)) {
               return null;
           }
           $this->currency = (string)$data;
       }
       return $this->currency;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getBillingAddress()
    {
       if (is_null($this->billingAddress)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDraft::FIELD_BILLING_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->billingAddress = AddressModel::of($data);
       }
       return $this->billingAddress;
    }
    final public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
    
    final public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
    
    final public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }
    
    final public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
    
    final public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }
    
    final public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }
    
    final public function setTaxCalculationMode(?string $taxCalculationMode): void
    {
        $this->taxCalculationMode = $taxCalculationMode;
    }
    
    final public function setStore(?StoreResourceIdentifier $store): void
    {
        $this->store = $store;
    }
    
    final public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }
    
    final public function setExternalTaxRateForShippingMethod(?ExternalTaxRateDraft $externalTaxRateForShippingMethod): void
    {
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;
    }
    
    final public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }
    
    final public function setLineItems(?LineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }
    
    final public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }
    
    final public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void
    {
        $this->customLineItems = $customLineItems;
    }
    
    final public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }
    
    final public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }
    
    final public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }
    
    final public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }
    
    final public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }
    
    final public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }
    
    final public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }
    
}