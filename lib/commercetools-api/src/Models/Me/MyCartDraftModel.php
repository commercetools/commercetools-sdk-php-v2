<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class MyCartDraftModel extends JsonObjectModel implements MyCartDraft
{
    
    public function __construct(
        MyLineItemDraftCollection $lineItems = null,
        string $country = null,
        AddressCollection $itemShippingAddresses = null,
        string $taxMode = null,
        int $deleteDaysAfterLastModification = null,
        CustomFieldsDraft $custom = null,
        ShippingMethodResourceIdentifier $shippingMethod = null,
        string $customerEmail = null,
        Address $shippingAddress = null,
        string $currency = null,
        Address $billingAddress = null,
        string $locale = null,
        string $inventoryMode = null
    ) {
        $this->lineItems = $lineItems;
        $this->country = $country;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->taxMode = $taxMode;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->custom = $custom;
        $this->shippingMethod = $shippingMethod;
        $this->customerEmail = $customerEmail;
        $this->shippingAddress = $shippingAddress;
        $this->currency = $currency;
        $this->billingAddress = $billingAddress;
        $this->locale = $locale;
        $this->inventoryMode = $inventoryMode;
        
    }

    /**
     * @var ?MyLineItemDraftCollection
     */
    protected $lineItems;
    
    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;
    
    /**
     * @var ?string
     */
    protected $taxMode;
    
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
    protected $customerEmail;
    
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
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?string
     */
    protected $inventoryMode;

    /**
     *
     * @return MyLineItemDraftCollection|null
     */
    final public function getLineItems()
    {
       if (is_null($this->lineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(MyCartDraft::FIELD_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->lineItems = MyLineItemDraftCollection::fromArray($data);
       }
       return $this->lineItems;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCountry()
    {
       if (is_null($this->country)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MyCartDraft::FIELD_COUNTRY);
           if (is_null($data)) {
               return null;
           }
           $this->country = (string)$data;
       }
       return $this->country;
    }
    
    /**
     *
     * @return AddressCollection|null
     */
    final public function getItemShippingAddresses()
    {
       if (is_null($this->itemShippingAddresses)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(MyCartDraft::FIELD_ITEM_SHIPPING_ADDRESSES);
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
           $data = $this->raw(MyCartDraft::FIELD_TAX_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxMode = (string)$data;
       }
       return $this->taxMode;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterLastModification()
    {
       if (is_null($this->deleteDaysAfterLastModification)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MyCartDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
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
           $data = $this->raw(MyCartDraft::FIELD_CUSTOM);
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
           $data = $this->raw(MyCartDraft::FIELD_SHIPPING_METHOD);
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
    final public function getCustomerEmail()
    {
       if (is_null($this->customerEmail)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MyCartDraft::FIELD_CUSTOMER_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->customerEmail = (string)$data;
       }
       return $this->customerEmail;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getShippingAddress()
    {
       if (is_null($this->shippingAddress)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(MyCartDraft::FIELD_SHIPPING_ADDRESS);
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
           $data = $this->raw(MyCartDraft::FIELD_CURRENCY);
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
           $data = $this->raw(MyCartDraft::FIELD_BILLING_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->billingAddress = AddressModel::of($data);
       }
       return $this->billingAddress;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       if (is_null($this->locale)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MyCartDraft::FIELD_LOCALE);
           if (is_null($data)) {
               return null;
           }
           $this->locale = (string)$data;
       }
       return $this->locale;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInventoryMode()
    {
       if (is_null($this->inventoryMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MyCartDraft::FIELD_INVENTORY_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->inventoryMode = (string)$data;
       }
       return $this->inventoryMode;
    }
    final public function setLineItems(?MyLineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }
    
    final public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
    
    final public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }
    
    final public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
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
    
    final public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
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
    
    final public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }
    
    final public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }
    
}