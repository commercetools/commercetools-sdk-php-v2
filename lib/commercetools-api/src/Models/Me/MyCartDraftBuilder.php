<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;

/**
 * @implements Builder<MyCartDraft>
 */
final class MyCartDraftBuilder implements Builder
{
    public function __construct() {
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
    protected $customerEmail;
    
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
       return $this->lineItems;
    }
    
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
    final public function getCustomerEmail()
    {
       return $this->customerEmail;
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
     * @return $this
     */
    final public function withLineItems(?MyLineItemDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;
        
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
    final public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;
        
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
    
    public function build(): MyCartDraft {
        return new MyCartDraftModel(
            $this->lineItems,
            $this->country,
            $this->itemShippingAddresses,
            $this->taxMode,
            $this->deleteDaysAfterLastModification,
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod),
            $this->customerEmail,
            ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress),
            $this->currency,
            ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress),
            $this->locale,
            $this->inventoryMode
        );
    }
    
    public static function of(): MyCartDraftBuilder
    {
        return new self();
    }
}