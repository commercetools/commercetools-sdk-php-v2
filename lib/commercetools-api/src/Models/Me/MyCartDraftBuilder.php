<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierBuilder;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
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

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $businessUnit;

    /**

     * @var null|StoreResourceIdentifier|StoreResourceIdentifierBuilder
     */
    private $store;

    /**

     * @var ?MyLineItemDraftCollection
     */
    private $lineItems;

    /**

     * @var ?string
     */
    private $taxMode;

    /**

     * @var ?string
     */
    private $inventoryMode;

    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $billingAddress;

    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $shippingAddress;

    /**

     * @var null|ShippingMethodResourceIdentifier|ShippingMethodResourceIdentifierBuilder
     */
    private $shippingMethod;

    /**

     * @var ?BaseAddressCollection
     */
    private $itemShippingAddresses;

    /**

     * @var ?string
     */
    private $shippingMode;

    /**

     * @var ?array
     */
    private $discountCodes;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var ?string
     */
    private $locale;

    /**

     * @var ?int
     */
    private $deleteDaysAfterLastModification;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>Currency the Cart uses.</p>
     *

     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <p>Email address of the Customer the Cart belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Business Unit the Cart should belong to. The <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Store the Cart should belong to. Once set, it cannot be updated.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        return $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> to add to the Cart.</p>
     *

     * @return null|MyLineItemDraftCollection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * <p>Determines how Tax Rates are set. The <code>Disabled</code> TaxMode <strong>cannot</strong> be set.</p>
     *

     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * <p>Determines how stock quantities are tracked for Line Items in the Cart.</p>
     *

     * @return null|string
     */
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * <p>Billing address associated with the Cart.</p>
     *

     * @return null|BaseAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress instanceof BaseAddressBuilder ? $this->billingAddress->build() : $this->billingAddress;
    }

    /**
     * <p>Shipping address associated with the Cart. Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress instanceof BaseAddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress;
    }

    /**
     * <p>Shipping Method for the Cart. If the referenced <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> has a <code>predicate</code> that does not match the Cart, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned when <a href="ctp:api:endpoint:/{projectKey}/carts:POST">creating a Cart</a>.</p>
     *

     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * <p>Multiple shipping addresses of the Cart. Each address must contain a <code>key</code> that is unique in this Cart.
     * The keys are used by <a href="ctp:api:type:LineItem">LineItems</a> to reference these addresses under their <code>shippingDetails</code>.</p>
     * <p>Eligible Shipping Methods or applicable Tax Rates are determined by the <a href="ctp:api:type:Cart">Cart</a> <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
    }

    /**
     * <ul>
     * <li>If set to <code>Single</code>, only a single Shipping Method can be added to the Cart.</li>
     * <li>If set to <code>Multiple</code>, multiple Shipping Methods can be added to the Cart.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getShippingMode()
    {
        return $this->shippingMode;
    }

    /**
     * <p><code>code</code> of the existing <a href="ctp:api:type:DiscountCode">DiscountCodes</a> to add to the Cart.</p>
     *

     * @return null|array
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    /**
     * <p>Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.
     * If used for <a href="ctp:api:endpoint:/{projectKey}/in-store/me/carts:POST">Create Cart in Store</a>, the provided country must be one of the <a href="ctp:api:type:Store">Store's</a> <code>countries</code>.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Languages of the Cart.
     * Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <p>Number of days after which a Cart with <code>Active</code> <a href="ctp:api:type:CartState">CartState</a> is deleted since its last modification.
     * If not provided, the default value for this field configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a> is assigned.</p>
     * <p>Create a <a href="ctp:api:type:ChangeSubscription">ChangeSubscription</a> for Carts to receive a <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a> upon deletion of the Cart.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        return $this->deleteDaysAfterLastModification;
    }

    /**
     * <p>Custom Fields for the Cart.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     * @return $this
     */
    public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;

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
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

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
     * @param ?BaseAddress $billingAddress
     * @return $this
     */
    public function withBillingAddress(?BaseAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;

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
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

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
     * @param ?string $shippingMode
     * @return $this
     */
    public function withShippingMode(?string $shippingMode)
    {
        $this->shippingMode = $shippingMode;

        return $this;
    }

    /**
     * @param ?array $discountCodes
     * @return $this
     */
    public function withDiscountCodes(?array $discountCodes)
    {
        $this->discountCodes = $discountCodes;

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
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

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
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitResourceIdentifierBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;

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
     * @deprecated use withShippingAddress() instead
     * @return $this
     */
    public function withShippingAddressBuilder(?BaseAddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

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

    public function build(): MyCartDraft
    {
        return new MyCartDraftModel(
            $this->currency,
            $this->customerEmail,
            $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store,
            $this->lineItems,
            $this->taxMode,
            $this->inventoryMode,
            $this->billingAddress instanceof BaseAddressBuilder ? $this->billingAddress->build() : $this->billingAddress,
            $this->shippingAddress instanceof BaseAddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress,
            $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod,
            $this->itemShippingAddresses,
            $this->shippingMode,
            $this->discountCodes,
            $this->country,
            $this->locale,
            $this->deleteDaysAfterLastModification,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): MyCartDraftBuilder
    {
        return new self();
    }
}
