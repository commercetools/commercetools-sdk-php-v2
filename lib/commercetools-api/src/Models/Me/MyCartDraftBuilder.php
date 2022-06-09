<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartDraft>
 */
final class MyCartDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $currency;

    /**
     * @var ?string
     */
    private $customerEmail;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ?string
     */
    private $inventoryMode;

    /**
     * @var ?MyLineItemDraftCollection
     */
    private $lineItems;

    /**
     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $shippingAddress;

    /**
     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $billingAddress;

    /**
     * @var null|ShippingMethodResourceIdentifier|ShippingMethodResourceIdentifierBuilder
     */
    private $shippingMethod;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var ?string
     */
    private $locale;

    /**
     * @var ?string
     */
    private $taxMode;

    /**
     * @var ?int
     */
    private $deleteDaysAfterLastModification;

    /**
     * @var ?BaseAddressCollection
     */
    private $itemShippingAddresses;

    /**
     * @var null|StoreKeyReference|StoreKeyReferenceBuilder
     */
    private $store;

    /**
     * @var ?DiscountCodeInfoCollection
     */
    private $discountCodes;

    /**
     * <p>A three-digit currency code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Default inventory mode is <code>None</code>.</p>
     *
     * @return null|string
     */
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * @return null|MyLineItemDraftCollection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @return null|BaseAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress instanceof BaseAddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress;
    }

    /**
     * @return null|BaseAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress instanceof BaseAddressBuilder ? $this->billingAddress->build() : $this->billingAddress;
    }

    /**
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <p>The <code>TaxMode</code> <code>Disabled</code> can not be set on the My Carts endpoint.</p>
     *
     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * <p>The cart will be deleted automatically if it hasn't been modified for the specified amount of days and it is in the <code>Active</code> CartState.
     * If a ChangeSubscription for carts exists, a <code>ResourceDeleted</code> notification will be sent.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        return $this->deleteDaysAfterLastModification;
    }

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.
     * Each address must contain a key which is unique in this cart.</p>
     *
     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
    }

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:Store">Store</a> by its key.</p>
     *
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    /**
     * @param ?string $currency
     * @return $this
     */
    public function withCurrency(?string $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param ?string $customerEmail
     * @return $this
     */
    public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?string $inventoryMode
     * @return $this
     */
    public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;

        return $this;
    }

    /**
     * @param ?MyLineItemDraftCollection $lineItems
     * @return $this
     */
    public function withLineItems(?MyLineItemDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @param ?BaseAddress $shippingAddress
     * @return $this
     */
    public function withShippingAddress(?BaseAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @param ?BaseAddress $billingAddress
     * @return $this
     */
    public function withBillingAddress(?BaseAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
     * @return $this
     */
    public function withDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;

        return $this;
    }

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     * @return $this
     */
    public function withItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses)
    {
        $this->itemShippingAddresses = $itemShippingAddresses;

        return $this;
    }

    /**
     * @param ?StoreKeyReference $store
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @param ?DiscountCodeInfoCollection $discountCodes
     * @return $this
     */
    public function withDiscountCodes(?DiscountCodeInfoCollection $discountCodes)
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * @deprecated use withShippingAddress() instead
     * @return $this
     */
    public function withShippingAddressBuilder(?BaseAddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @deprecated use withBillingAddress() instead
     * @return $this
     */
    public function withBillingAddressBuilder(?BaseAddressBuilder $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @deprecated use withShippingMethod() instead
     * @return $this
     */
    public function withShippingMethodBuilder(?ShippingMethodResourceIdentifierBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    public function build(): MyCartDraft
    {
        return new MyCartDraftModel(
            $this->currency,
            $this->customerEmail,
            $this->country,
            $this->inventoryMode,
            $this->lineItems,
            $this->shippingAddress instanceof BaseAddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress,
            $this->billingAddress instanceof BaseAddressBuilder ? $this->billingAddress->build() : $this->billingAddress,
            $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->locale,
            $this->taxMode,
            $this->deleteDaysAfterLastModification,
            $this->itemShippingAddresses,
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store,
            $this->discountCodes
        );
    }

    public static function of(): MyCartDraftBuilder
    {
        return new self();
    }
}
