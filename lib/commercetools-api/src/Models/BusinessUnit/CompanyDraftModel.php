<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
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
final class CompanyDraftModel extends JsonObjectModel implements CompanyDraft
{
    public const DISCRIMINATOR_VALUE = 'Company';
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $status;

    /**
     *
     * @var ?StoreKeyReferenceCollection
     */
    protected $stores;

    /**
     *
     * @var ?string
     */
    protected $storeMode;

    /**
     *
     * @var ?string
     */
    protected $unitType;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $contactEmail;

    /**
     *
     * @var ?AssociateDraftCollection
     */
    protected $associates;

    /**
     *
     * @var ?BaseAddressCollection
     */
    protected $addresses;

    /**
     *
     * @var ?array
     */
    protected $shippingAddresses;

    /**
     *
     * @var ?int
     */
    protected $defaultShipingAddress;

    /**
     *
     * @var ?array
     */
    protected $billingAddresses;

    /**
     *
     * @var ?int
     */
    protected $defaultBillingAddress;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $status = null,
        ?StoreKeyReferenceCollection $stores = null,
        ?string $storeMode = null,
        ?string $name = null,
        ?string $contactEmail = null,
        ?AssociateDraftCollection $associates = null,
        ?BaseAddressCollection $addresses = null,
        ?array $shippingAddresses = null,
        ?int $defaultShipingAddress = null,
        ?array $billingAddresses = null,
        ?int $defaultBillingAddress = null,
        ?CustomFieldsDraft $custom = null,
        ?string $unitType = null
    ) {
        $this->key = $key;
        $this->status = $status;
        $this->stores = $stores;
        $this->storeMode = $storeMode;
        $this->name = $name;
        $this->contactEmail = $contactEmail;
        $this->associates = $associates;
        $this->addresses = $addresses;
        $this->shippingAddresses = $shippingAddresses;
        $this->defaultShipingAddress = $defaultShipingAddress;
        $this->billingAddresses = $billingAddresses;
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->custom = $custom;
        $this->unitType = $unitType ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>User-defined unique identifier for the Business Unit.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Indicates whether the Business Unit can be edited and used in <a href="/../api/projects/orders">Orders</a>.</p>
     *
     *
     * @return null|string
     */
    public function getStatus()
    {
        if (is_null($this->status)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->status = (string) $data;
        }

        return $this->status;
    }

    /**
     * <p>References to <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Can only be set when <code>storeMode</code> is <code>Explicit</code>.
     * If not empty, the Business Unit can only be linked to <a href="ctp:api:type:Cart">Carts</a> and <a href="ctp:api:type:Order">Orders</a> of a referenced Store.
     * If empty, the Business Unit can only create <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, or <a href="/../api/quotes-overview">Quotes</a> that have no <code>store</code> value.
     * Defaults to empty for <a href="ctp:api:type:BusinessUnitType">Companies</a> and not set for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
     *
     *
     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreKeyReferenceCollection::fromArray($data);
        }

        return $this->stores;
    }

    /**
     * <p>Defines whether the Stores of the Business Unit are set on the Business Unit or are inherited from a parent.
     * Defaults to <code>Explicit</code> for <a href="ctp:api:type:BusinessUnitType">Companies</a> and to <code>FromParent</code> for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
     *
     *
     * @return null|string
     */
    public function getStoreMode()
    {
        if (is_null($this->storeMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STORE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->storeMode = (string) $data;
        }

        return $this->storeMode;
    }

    /**
     * <p>Type of the Business Unit indicating its position in a hierarchy.</p>
     *
     *
     * @return null|string
     */
    public function getUnitType()
    {
        if (is_null($this->unitType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_UNIT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->unitType = (string) $data;
        }

        return $this->unitType;
    }

    /**
     * <p>Name of the Business Unit.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Email address of the Business Unit.</p>
     *
     *
     * @return null|string
     */
    public function getContactEmail()
    {
        if (is_null($this->contactEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONTACT_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->contactEmail = (string) $data;
        }

        return $this->contactEmail;
    }

    /**
     * <p>List of members that are part of the Business Unit in specific <a href="ctp:api:type:AssociateRole">roles</a>.</p>
     *
     *
     * @return null|AssociateDraftCollection
     */
    public function getAssociates()
    {
        if (is_null($this->associates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSOCIATES);
            if (is_null($data)) {
                return null;
            }
            $this->associates = AssociateDraftCollection::fromArray($data);
        }

        return $this->associates;
    }

    /**
     * <p>Addresses used by the Business Unit.</p>
     *
     *
     * @return null|BaseAddressCollection
     */
    public function getAddresses()
    {
        if (is_null($this->addresses)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->addresses = BaseAddressCollection::fromArray($data);
        }

        return $this->addresses;
    }

    /**
     * <p>Indexes of entries in <code>addresses</code> to set as shipping addresses.
     * The <code>shippingAddressIds</code> of the <a href="ctp:api:type:Customer">Customer</a> will be replaced by these addresses.</p>
     *
     *
     * @return null|array
     */
    public function getShippingAddresses()
    {
        if (is_null($this->shippingAddresses)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->shippingAddresses = $data;
        }

        return $this->shippingAddresses;
    }

    /**
     * <p>Index of the entry in <code>addresses</code> to set as the default shipping address.</p>
     *
     *
     * @return null|int
     */
    public function getDefaultShipingAddress()
    {
        if (is_null($this->defaultShipingAddress)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DEFAULT_SHIPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }
            $this->defaultShipingAddress = (int) $data;
        }

        return $this->defaultShipingAddress;
    }

    /**
     * <p>Indexes of entries in <code>addresses</code> to set as billing addresses.
     * The <code>billingAddressIds</code> of the <a href="ctp:api:type:Customer">Customer</a> will be replaced by these addresses.</p>
     *
     *
     * @return null|array
     */
    public function getBillingAddresses()
    {
        if (is_null($this->billingAddresses)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_BILLING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->billingAddresses = $data;
        }

        return $this->billingAddresses;
    }

    /**
     * <p>Index of the entry in <code>addresses</code> to set as the default billing address.</p>
     *
     *
     * @return null|int
     */
    public function getDefaultBillingAddress()
    {
        if (is_null($this->defaultBillingAddress)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DEFAULT_BILLING_ADDRESS);
            if (is_null($data)) {
                return null;
            }
            $this->defaultBillingAddress = (int) $data;
        }

        return $this->defaultBillingAddress;
    }

    /**
     * <p>Custom Fields for the Business Unit.</p>
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void
    {
        $this->stores = $stores;
    }

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void
    {
        $this->storeMode = $storeMode;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $contactEmail
     */
    public function setContactEmail(?string $contactEmail): void
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @param ?AssociateDraftCollection $associates
     */
    public function setAssociates(?AssociateDraftCollection $associates): void
    {
        $this->associates = $associates;
    }

    /**
     * @param ?BaseAddressCollection $addresses
     */
    public function setAddresses(?BaseAddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @param ?array $shippingAddresses
     */
    public function setShippingAddresses(?array $shippingAddresses): void
    {
        $this->shippingAddresses = $shippingAddresses;
    }

    /**
     * @param ?int $defaultShipingAddress
     */
    public function setDefaultShipingAddress(?int $defaultShipingAddress): void
    {
        $this->defaultShipingAddress = $defaultShipingAddress;
    }

    /**
     * @param ?array $billingAddresses
     */
    public function setBillingAddresses(?array $billingAddresses): void
    {
        $this->billingAddresses = $billingAddresses;
    }

    /**
     * @param ?int $defaultBillingAddress
     */
    public function setDefaultBillingAddress(?int $defaultBillingAddress): void
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
