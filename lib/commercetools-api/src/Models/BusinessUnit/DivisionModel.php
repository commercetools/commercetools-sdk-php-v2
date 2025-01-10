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
final class DivisionModel extends JsonObjectModel implements Division
{
    public const DISCRIMINATOR_VALUE = 'Division';
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
     * @var ?StoreKeyReferenceCollection
     */
    protected $inheritedStores;

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
    protected $defaultShippingAddressId;

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
     * @var ?string
     */
    protected $associateMode;

    /**
     *
     * @var ?AssociateCollection
     */
    protected $associates;

    /**
     *
     * @var ?InheritedAssociateCollection
     */
    protected $inheritedAssociates;

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
     *
     * @var ?string
     */
    protected $approvalRuleMode;


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
        ?StoreKeyReferenceCollection $inheritedStores = null,
        ?string $storeMode = null,
        ?string $name = null,
        ?string $contactEmail = null,
        ?CustomFields $custom = null,
        ?AddressCollection $addresses = null,
        ?array $shippingAddressIds = null,
        ?string $defaultShippingAddressId = null,
        ?array $billingAddressIds = null,
        ?string $defaultBillingAddressId = null,
        ?string $associateMode = null,
        ?AssociateCollection $associates = null,
        ?InheritedAssociateCollection $inheritedAssociates = null,
        ?BusinessUnitKeyReference $parentUnit = null,
        ?BusinessUnitKeyReference $topLevelUnit = null,
        ?string $approvalRuleMode = null,
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
        $this->inheritedStores = $inheritedStores;
        $this->storeMode = $storeMode;
        $this->name = $name;
        $this->contactEmail = $contactEmail;
        $this->custom = $custom;
        $this->addresses = $addresses;
        $this->shippingAddressIds = $shippingAddressIds;
        $this->defaultShippingAddressId = $defaultShippingAddressId;
        $this->billingAddressIds = $billingAddressIds;
        $this->defaultBillingAddressId = $defaultBillingAddressId;
        $this->associateMode = $associateMode;
        $this->associates = $associates;
        $this->inheritedAssociates = $inheritedAssociates;
        $this->parentUnit = $parentUnit;
        $this->topLevelUnit = $topLevelUnit;
        $this->approvalRuleMode = $approvalRuleMode;
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
     * <p>IDs and references that last modified the BusinessUnit.</p>
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
     * <p>IDs and references that created the BusinessUnit.</p>
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
     * <p>User-defined unique and immutable identifier of the Business Unit.</p>
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
     * <p>References to <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Only present when <code>storeMode</code> is <code>Explicit</code>.</p>
     * <p>If the Business Unit has Stores defined, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must belong to one of the Business Unit's Stores.</p>
     * <p>If the Business Unit has no Stores, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must not belong to any Store.</p>
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
     * <p>Stores that are inherited from a parent Business Unit. The value of this field is <a href="/../api/general-concepts#eventual-consistency">eventually consistent</a> and is only present when the <code>storeMode</code> is set to <code>FromParent</code>.</p>
     *
     *
     * @return null|StoreKeyReferenceCollection
     */
    public function getInheritedStores()
    {
        if (is_null($this->inheritedStores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_INHERITED_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->inheritedStores = StoreKeyReferenceCollection::fromArray($data);
        }

        return $this->inheritedStores;
    }

    /**
     * <p>Defines whether the Stores of the Division are set explicitly or inherited from a parent Business Unit.</p>
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
    public function getDefaultShippingAddressId()
    {
        if (is_null($this->defaultShippingAddressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DEFAULT_SHIPPING_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->defaultShippingAddressId = (string) $data;
        }

        return $this->defaultShippingAddressId;
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
     * <p>Determines whether the Division can inherit Associates from a parent.</p>
     *
     *
     * @return null|string
     */
    public function getAssociateMode()
    {
        if (is_null($this->associateMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->associateMode = (string) $data;
        }

        return $this->associateMode;
    }

    /**
     * <p>Associates that are part of the Business Unit in specific <a href="ctp:api:type:AssociateRole">roles</a>.</p>
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
     * <p>Associates that are inherited from a parent Business Unit. The value of this field is <a href="/../api/general-concepts#eventual-consistency">eventually consistent</a> and is only present when the <code>associateMode</code> is set to <code>ExplicitAndFromParent</code>.</p>
     *
     *
     * @return null|InheritedAssociateCollection
     */
    public function getInheritedAssociates()
    {
        if (is_null($this->inheritedAssociates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_INHERITED_ASSOCIATES);
            if (is_null($data)) {
                return null;
            }
            $this->inheritedAssociates = InheritedAssociateCollection::fromArray($data);
        }

        return $this->inheritedAssociates;
    }

    /**
     * <p>Parent unit of the Division.</p>
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
     * <p>Determines whether a Business Unit can inherit Approval Rules from a parent.</p>
     *
     *
     * @return null|string
     */
    public function getApprovalRuleMode()
    {
        if (is_null($this->approvalRuleMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_APPROVAL_RULE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->approvalRuleMode = (string) $data;
        }

        return $this->approvalRuleMode;
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
     * @param ?StoreKeyReferenceCollection $inheritedStores
     */
    public function setInheritedStores(?StoreKeyReferenceCollection $inheritedStores): void
    {
        $this->inheritedStores = $inheritedStores;
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
     * @param ?string $defaultShippingAddressId
     */
    public function setDefaultShippingAddressId(?string $defaultShippingAddressId): void
    {
        $this->defaultShippingAddressId = $defaultShippingAddressId;
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
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void
    {
        $this->associateMode = $associateMode;
    }

    /**
     * @param ?AssociateCollection $associates
     */
    public function setAssociates(?AssociateCollection $associates): void
    {
        $this->associates = $associates;
    }

    /**
     * @param ?InheritedAssociateCollection $inheritedAssociates
     */
    public function setInheritedAssociates(?InheritedAssociateCollection $inheritedAssociates): void
    {
        $this->inheritedAssociates = $inheritedAssociates;
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

    /**
     * @param ?string $approvalRuleMode
     */
    public function setApprovalRuleMode(?string $approvalRuleMode): void
    {
        $this->approvalRuleMode = $approvalRuleMode;
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
