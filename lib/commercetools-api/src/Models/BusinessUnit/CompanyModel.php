<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CompanyModel extends JsonObjectModel implements Company
{
    public const DISCRIMINATOR_VALUE = 'Company';
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

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
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?AddressCollection
     */
    protected $addresses;

    /**
     *
     * @var ?array
     */
    protected $shippingAddressIds;

    /**
     *
     * @var ?string
     */
    protected $defaultShipingAddressId;

    /**
     *
     * @var ?array
     */
    protected $billingAddressIds;

    /**
     *
     * @var ?string
     */
    protected $defaultBillingAddressId;

    /**
     *
     * @var ?AssociateCollection
     */
    protected $associates;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $parentUnit;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $topLevelUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?string $key = null,
        ?string $status = null,
        ?StoreKeyReferenceCollection $stores = null,
        ?string $storeMode = null,
        ?string $name = null,
        ?string $contactEmail = null,
        ?CustomFields $custom = null,
        ?AddressCollection $addresses = null,
        ?array $shippingAddressIds = null,
        ?string $defaultShipingAddressId = null,
        ?array $billingAddressIds = null,
        ?string $defaultBillingAddressId = null,
        ?AssociateCollection $associates = null,
        ?BusinessUnitKeyReference $parentUnit = null,
        ?BusinessUnitKeyReference $topLevelUnit = null,
        ?string $unitType = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->key = $key;
        $this->status = $status;
        $this->stores = $stores;
        $this->storeMode = $storeMode;
        $this->name = $name;
        $this->contactEmail = $contactEmail;
        $this->custom = $custom;
        $this->addresses = $addresses;
        $this->shippingAddressIds = $shippingAddressIds;
        $this->defaultShipingAddressId = $defaultShipingAddressId;
        $this->billingAddressIds = $billingAddressIds;
        $this->defaultBillingAddressId = $defaultBillingAddressId;
        $this->associates = $associates;
        $this->parentUnit = $parentUnit;
        $this->topLevelUnit = $topLevelUnit;
        $this->unitType = $unitType ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Unique identifier of the Business Unit.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the Business Unit.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Business Unit was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Business Unit was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources updated after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the Business Unit.</p>
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
     * <p>References to <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with.
     * If empty, the Business Unit can only create <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, or <a href="/../api/quotes-overview">Quotes</a> that have no <code>store</code> value.
     * If not empty, the Business Unit can only be linked to <a href="ctp:api:type:Cart">Carts</a> and <a href="ctp:api:type:Order">Orders</a> of a referenced Store.
     * Only present when <code>storeMode</code> is <code>Explicit</code>.</p>
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
     * <p>Is always <code>Explicit</code> since a Company does not have a parent Business Unit the Stores can be inherited from.</p>
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
     * <p>Custom Fields for the Business Unit.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Addresses used by the Business Unit.</p>
     *
     *
     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        if (is_null($this->addresses)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->addresses = AddressCollection::fromArray($data);
        }

        return $this->addresses;
    }

    /**
     * <p>Unique identifiers of addresses used as shipping addresses.</p>
     *
     *
     * @return null|array
     */
    public function getShippingAddressIds()
    {
        if (is_null($this->shippingAddressIds)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESS_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->shippingAddressIds = $data;
        }

        return $this->shippingAddressIds;
    }

    /**
     * <p>Unique identifier of the address used as the default shipping address.</p>
     *
     *
     * @return null|string
     */
    public function getDefaultShipingAddressId()
    {
        if (is_null($this->defaultShipingAddressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DEFAULT_SHIPING_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->defaultShipingAddressId = (string) $data;
        }

        return $this->defaultShipingAddressId;
    }

    /**
     * <p>Unique identifiers of addresses used as billing addresses.</p>
     *
     *
     * @return null|array
     */
    public function getBillingAddressIds()
    {
        if (is_null($this->billingAddressIds)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_BILLING_ADDRESS_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->billingAddressIds = $data;
        }

        return $this->billingAddressIds;
    }

    /**
     * <p>Unique identifier of the address used as the default billing address.</p>
     *
     *
     * @return null|string
     */
    public function getDefaultBillingAddressId()
    {
        if (is_null($this->defaultBillingAddressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DEFAULT_BILLING_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->defaultBillingAddressId = (string) $data;
        }

        return $this->defaultBillingAddressId;
    }

    /**
     * <p>Members that are part of the Business Unit in specific <a href="ctp:api:type:AssociateRole">roles</a>.</p>
     *
     *
     * @return null|AssociateCollection
     */
    public function getAssociates()
    {
        if (is_null($this->associates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSOCIATES);
            if (is_null($data)) {
                return null;
            }
            $this->associates = AssociateCollection::fromArray($data);
        }

        return $this->associates;
    }

    /**
     * <p>Parent unit of the Business Unit. Only present when the <code>unitType</code> is <code>Division</code>.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getParentUnit()
    {
        if (is_null($this->parentUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARENT_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->parentUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->parentUnit;
    }

    /**
     * <p>Top-level unit of the Business Unit. The top-level unit is of <code>unitType</code> <code>Company</code>.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getTopLevelUnit()
    {
        if (is_null($this->topLevelUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOP_LEVEL_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->topLevelUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->topLevelUnit;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?AddressCollection $addresses
     */
    public function setAddresses(?AddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @param ?array $shippingAddressIds
     */
    public function setShippingAddressIds(?array $shippingAddressIds): void
    {
        $this->shippingAddressIds = $shippingAddressIds;
    }

    /**
     * @param ?string $defaultShipingAddressId
     */
    public function setDefaultShipingAddressId(?string $defaultShipingAddressId): void
    {
        $this->defaultShipingAddressId = $defaultShipingAddressId;
    }

    /**
     * @param ?array $billingAddressIds
     */
    public function setBillingAddressIds(?array $billingAddressIds): void
    {
        $this->billingAddressIds = $billingAddressIds;
    }

    /**
     * @param ?string $defaultBillingAddressId
     */
    public function setDefaultBillingAddressId(?string $defaultBillingAddressId): void
    {
        $this->defaultBillingAddressId = $defaultBillingAddressId;
    }

    /**
     * @param ?AssociateCollection $associates
     */
    public function setAssociates(?AssociateCollection $associates): void
    {
        $this->associates = $associates;
    }

    /**
     * @param ?BusinessUnitKeyReference $parentUnit
     */
    public function setParentUnit(?BusinessUnitKeyReference $parentUnit): void
    {
        $this->parentUnit = $parentUnit;
    }

    /**
     * @param ?BusinessUnitKeyReference $topLevelUnit
     */
    public function setTopLevelUnit(?BusinessUnitKeyReference $topLevelUnit): void
    {
        $this->topLevelUnit = $topLevelUnit;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BusinessUnit::FIELD_CREATED_AT]) && $data[BusinessUnit::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[BusinessUnit::FIELD_CREATED_AT] = $data[BusinessUnit::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BusinessUnit::FIELD_LAST_MODIFIED_AT]) && $data[BusinessUnit::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BusinessUnit::FIELD_LAST_MODIFIED_AT] = $data[BusinessUnit::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
