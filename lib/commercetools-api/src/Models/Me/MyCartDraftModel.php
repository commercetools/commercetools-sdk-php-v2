<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Common\BaseAddressModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCartDraftModel extends JsonObjectModel implements MyCartDraft
{
    /**
     *
     * @var ?string
     */
    protected $currency;

    /**
     *
     * @var ?string
     */
    protected $customerEmail;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $businessUnit;

    /**
     *
     * @var ?StoreResourceIdentifier
     */
    protected $store;

    /**
     *
     * @var ?MyLineItemDraftCollection
     */
    protected $lineItems;

    /**
     *
     * @var ?string
     */
    protected $taxMode;

    /**
     *
     * @var ?string
     */
    protected $inventoryMode;

    /**
     *
     * @var ?BaseAddress
     */
    protected $billingAddress;

    /**
     *
     * @var ?BaseAddress
     */
    protected $shippingAddress;

    /**
     *
     * @var ?ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;

    /**
     *
     * @var ?BaseAddressCollection
     */
    protected $itemShippingAddresses;

    /**
     *
     * @var ?array
     */
    protected $discountCodes;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?string
     */
    protected $locale;

    /**
     *
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $currency = null,
        ?string $customerEmail = null,
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?StoreResourceIdentifier $store = null,
        ?MyLineItemDraftCollection $lineItems = null,
        ?string $taxMode = null,
        ?string $inventoryMode = null,
        ?BaseAddress $billingAddress = null,
        ?BaseAddress $shippingAddress = null,
        ?ShippingMethodResourceIdentifier $shippingMethod = null,
        ?BaseAddressCollection $itemShippingAddresses = null,
        ?array $discountCodes = null,
        ?string $country = null,
        ?string $locale = null,
        ?int $deleteDaysAfterLastModification = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->currency = $currency;
        $this->customerEmail = $customerEmail;
        $this->businessUnit = $businessUnit;
        $this->store = $store;
        $this->lineItems = $lineItems;
        $this->taxMode = $taxMode;
        $this->inventoryMode = $inventoryMode;
        $this->billingAddress = $billingAddress;
        $this->shippingAddress = $shippingAddress;
        $this->shippingMethod = $shippingMethod;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->discountCodes = $discountCodes;
        $this->country = $country;
        $this->locale = $locale;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->custom = $custom;
    }

    /**
     * <p>Currency the Cart uses.</p>
     *
     *
     * @return null|string
     */
    public function getCurrency()
    {
        if (is_null($this->currency)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CURRENCY);
            if (is_null($data)) {
                return null;
            }
            $this->currency = (string) $data;
        }

        return $this->currency;
    }

    /**
     * <p>Email address of the Customer the Cart belongs to.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->customerEmail = (string) $data;
        }

        return $this->customerEmail;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Business Unit the Cart should belong to.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Store the Cart should belong to. Once set, it cannot be updated.</p>
     *
     *
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreResourceIdentifierModel::of($data);
        }

        return $this->store;
    }

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> to add to the Cart.</p>
     *
     *
     * @return null|MyLineItemDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = MyLineItemDraftCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * <p>Determines how Tax Rates are set. The <code>Disabled</code> TaxMode <strong>cannot</strong> be set.</p>
     *
     *
     * @return null|string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxMode = (string) $data;
        }

        return $this->taxMode;
    }

    /**
     * <p>Determines how stock quantities are tracked for Line Items in the Cart.</p>
     *
     *
     * @return null|string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INVENTORY_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->inventoryMode = (string) $data;
        }

        return $this->inventoryMode;
    }

    /**
     * <p>Billing address associated with the Cart.</p>
     *
     *
     * @return null|BaseAddress
     */
    public function getBillingAddress()
    {
        if (is_null($this->billingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BILLING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->billingAddress = BaseAddressModel::of($data);
        }

        return $this->billingAddress;
    }

    /**
     * <p>Shipping address associated with the Cart. Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
     *
     *
     * @return null|BaseAddress
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingAddress = BaseAddressModel::of($data);
        }

        return $this->shippingAddress;
    }

    /**
     * <p>Shipping Method for the Cart. If the referenced <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> has a <code>predicate</code> that does not match the Cart, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned when <a href="#create-cart">creating a Cart</a>.</p>
     *
     *
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->shippingMethod = ShippingMethodResourceIdentifierModel::of($data);
        }

        return $this->shippingMethod;
    }

    /**
     * <p>Multiple shipping addresses of the Cart. Each address must contain a <code>key</code> that is unique in this Cart.
     * The keys are used by <a href="ctp:api:type:LineItem">LineItems</a> to reference these addresses under their <code>shippingDetails</code>.</p>
     * <p>Eligible Shipping Methods or applicable Tax Rates are determined by the <a href="ctp:api:type:Cart">Cart</a> <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
     *
     *
     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses()
    {
        if (is_null($this->itemShippingAddresses)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEM_SHIPPING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->itemShippingAddresses = BaseAddressCollection::fromArray($data);
        }

        return $this->itemShippingAddresses;
    }

    /**
     * <p><code>code</code> of the existing <a href="ctp:api:type:DiscountCode">DiscountCodes</a> to add to the Cart.</p>
     *
     *
     * @return null|array
     */
    public function getDiscountCodes()
    {
        if (is_null($this->discountCodes)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODES);
            if (is_null($data)) {
                return null;
            }
            $this->discountCodes = $data;
        }

        return $this->discountCodes;
    }

    /**
     * <p>Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.
     * If used for <a href="ctp:api:endpoint:/{projectKey}/in-store/me/carts:POST">Create Cart in Store</a>, the provided country must be one of the <a href="ctp:api:type:Store">Store's</a> <code>countries</code>.</p>
     *
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>Languages of the Cart.
     * Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *
     *
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * <p>Number of days after which a Cart with <code>Active</code> <a href="ctp:api:type:CartState">CartState</a> is deleted since its last modification.
     * If not provided, the default value for this field configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a> is assigned.</p>
     * <p>Create a <a href="ctp:api:type:ChangeSubscription">ChangeSubscription</a> for Carts to receive a <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a> upon deletion of the Cart.</p>
     *
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    /**
     * <p>Custom Fields for the Cart.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?MyLineItemDraftCollection $lineItems
     */
    public function setLineItems(?MyLineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?BaseAddress $billingAddress
     */
    public function setBillingAddress(?BaseAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    /**
     * @param ?array $discountCodes
     */
    public function setDiscountCodes(?array $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
