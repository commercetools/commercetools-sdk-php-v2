<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;

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
     * @var ?string
     */
    protected $currency;

    /**
     * @var ?string
     */
    protected $customerEmail;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?string
     */
    protected $inventoryMode;

    /**
     * @var ?MyLineItemDraftCollection
     */
    protected $lineItems;

    /**
     * @var ?Address
     */
    protected $shippingAddress;

    /**
     * @var ?Address
     */
    protected $billingAddress;

    /**
     * @var ?ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?string
     */
    protected $taxMode;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;


    public function __construct(
        string $currency = null,
        string $customerEmail = null,
        string $country = null,
        string $inventoryMode = null,
        MyLineItemDraftCollection $lineItems = null,
        Address $shippingAddress = null,
        Address $billingAddress = null,
        ShippingMethodResourceIdentifier $shippingMethod = null,
        CustomFieldsDraft $custom = null,
        string $locale = null,
        string $taxMode = null,
        int $deleteDaysAfterLastModification = null,
        AddressCollection $itemShippingAddresses = null
    ) {
        $this->currency = $currency;
        $this->customerEmail = $customerEmail;
        $this->country = $country;
        $this->inventoryMode = $inventoryMode;
        $this->lineItems = $lineItems;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->shippingMethod = $shippingMethod;
        $this->custom = $custom;
        $this->locale = $locale;
        $this->taxMode = $taxMode;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    /**
     * <p>A three-digit currency code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCurrency()
    {
        if (is_null($this->currency)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartDraft::FIELD_CURRENCY);
            if (is_null($data)) {
                return null;
            }
            $this->currency = (string) $data;
        }

        return $this->currency;
    }

    /**
     * @return null|string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartDraft::FIELD_CUSTOMER_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->customerEmail = (string) $data;
        }

        return $this->customerEmail;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartDraft::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>Default inventory mode is <code>None</code>.</p>
     *
     * @return null|string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartDraft::FIELD_INVENTORY_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->inventoryMode = (string) $data;
        }

        return $this->inventoryMode;
    }

    /**
     * @return null|MyLineItemDraftCollection
     */
    public function getLineItems()
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
     * @return null|Address
     */
    public function getShippingAddress()
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
     * @return null|Address
     */
    public function getBillingAddress()
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
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
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
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
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
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartDraft::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * <p>The <code>TaxMode</code> <code>Disabled</code> can not be set on the My Carts endpoint.</p>
     *
     * @return null|string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartDraft::FIELD_TAX_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxMode = (string) $data;
        }

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
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MyCartDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.
     * Each address must contain a key which is unique in this cart.</p>
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
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

    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    public function setLineItems(?MyLineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }
}
