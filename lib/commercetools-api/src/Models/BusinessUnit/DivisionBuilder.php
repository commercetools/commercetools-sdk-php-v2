<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Division>
 */
final class DivisionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $status;

    /**

     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

    /**

     * @var ?string
     */
    private $storeMode;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $contactEmail;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var ?AddressCollection
     */
    private $addresses;

    /**

     * @var ?array
     */
    private $shippingAddressIds;

    /**

     * @var ?string
     */
    private $defaultShippingAddressId;

    /**

     * @var ?array
     */
    private $billingAddressIds;

    /**

     * @var ?string
     */
    private $defaultBillingAddressId;

    /**

     * @var ?string
     */
    private $associateMode;

    /**

     * @var ?AssociateCollection
     */
    private $associates;

    /**

     * @var ?InheritedAssociateCollection
     */
    private $inheritedAssociates;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $parentUnit;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $topLevelUnit;

    /**
     * <p>Unique identifier of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Business Unit.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Business Unit was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Business Unit was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the BusinessUnit.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the BusinessUnit.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Indicates whether the Business Unit can be edited and used in <a href="/../api/projects/orders">Orders</a>.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <p>References to <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Only present when <code>storeMode</code> is <code>Explicit</code>.</p>
     * <p>If the Business Unit has Stores defined, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must belong to one of the Business Unit's Stores.</p>
     * <p>If the Business Unit has no Stores, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must not belong to any Store.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * <p>Defines whether the Stores of the Division are set explicitly or inherited from a parent Business Unit.</p>
     *

     * @return null|string
     */
    public function getStoreMode()
    {
        return $this->storeMode;
    }

    /**
     * <p>Name of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Email address of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * <p>Custom Fields for the Business Unit.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Addresses used by the Business Unit.</p>
     *

     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <p>Unique identifiers of addresses used as shipping addresses.</p>
     *

     * @return null|array
     */
    public function getShippingAddressIds()
    {
        return $this->shippingAddressIds;
    }

    /**
     * <p>Unique identifier of the address used as the default shipping address.</p>
     *

     * @return null|string
     */
    public function getDefaultShippingAddressId()
    {
        return $this->defaultShippingAddressId;
    }

    /**
     * <p>Unique identifiers of addresses used as billing addresses.</p>
     *

     * @return null|array
     */
    public function getBillingAddressIds()
    {
        return $this->billingAddressIds;
    }

    /**
     * <p>Unique identifier of the address used as the default billing address.</p>
     *

     * @return null|string
     */
    public function getDefaultBillingAddressId()
    {
        return $this->defaultBillingAddressId;
    }

    /**
     * <p>Determines whether the Division can inherit Associates from a parent.</p>
     *

     * @return null|string
     */
    public function getAssociateMode()
    {
        return $this->associateMode;
    }

    /**
     * <p>Associates that are part of the Business Unit in specific <a href="ctp:api:type:AssociateRole">roles</a>.</p>
     *

     * @return null|AssociateCollection
     */
    public function getAssociates()
    {
        return $this->associates;
    }

    /**
     * <p>Associates that are inherited from a parent Business Unit. The value of this field is <a href="/../api/general-concepts#eventual-consistency">eventually consistent</a> and is only present when the <code>associateMode</code> is set to <code>ExplicitAndFromParent</code>.</p>
     *

     * @return null|InheritedAssociateCollection
     */
    public function getInheritedAssociates()
    {
        return $this->inheritedAssociates;
    }

    /**
     * <p>Parent unit of the Division.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getParentUnit()
    {
        return $this->parentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->parentUnit->build() : $this->parentUnit;
    }

    /**
     * <p>Top-level unit of the Business Unit. The top-level unit is of <code>unitType</code> <code>Company</code>.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getTopLevelUnit()
    {
        return $this->topLevelUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->topLevelUnit->build() : $this->topLevelUnit;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param ?StoreKeyReferenceCollection $stores
     * @return $this
     */
    public function withStores(?StoreKeyReferenceCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }

    /**
     * @param ?string $storeMode
     * @return $this
     */
    public function withStoreMode(?string $storeMode)
    {
        $this->storeMode = $storeMode;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $contactEmail
     * @return $this
     */
    public function withContactEmail(?string $contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?AddressCollection $addresses
     * @return $this
     */
    public function withAddresses(?AddressCollection $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @param ?array $shippingAddressIds
     * @return $this
     */
    public function withShippingAddressIds(?array $shippingAddressIds)
    {
        $this->shippingAddressIds = $shippingAddressIds;

        return $this;
    }

    /**
     * @param ?string $defaultShippingAddressId
     * @return $this
     */
    public function withDefaultShippingAddressId(?string $defaultShippingAddressId)
    {
        $this->defaultShippingAddressId = $defaultShippingAddressId;

        return $this;
    }

    /**
     * @param ?array $billingAddressIds
     * @return $this
     */
    public function withBillingAddressIds(?array $billingAddressIds)
    {
        $this->billingAddressIds = $billingAddressIds;

        return $this;
    }

    /**
     * @param ?string $defaultBillingAddressId
     * @return $this
     */
    public function withDefaultBillingAddressId(?string $defaultBillingAddressId)
    {
        $this->defaultBillingAddressId = $defaultBillingAddressId;

        return $this;
    }

    /**
     * @param ?string $associateMode
     * @return $this
     */
    public function withAssociateMode(?string $associateMode)
    {
        $this->associateMode = $associateMode;

        return $this;
    }

    /**
     * @param ?AssociateCollection $associates
     * @return $this
     */
    public function withAssociates(?AssociateCollection $associates)
    {
        $this->associates = $associates;

        return $this;
    }

    /**
     * @param ?InheritedAssociateCollection $inheritedAssociates
     * @return $this
     */
    public function withInheritedAssociates(?InheritedAssociateCollection $inheritedAssociates)
    {
        $this->inheritedAssociates = $inheritedAssociates;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $parentUnit
     * @return $this
     */
    public function withParentUnit(?BusinessUnitKeyReference $parentUnit)
    {
        $this->parentUnit = $parentUnit;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $topLevelUnit
     * @return $this
     */
    public function withTopLevelUnit(?BusinessUnitKeyReference $topLevelUnit)
    {
        $this->topLevelUnit = $topLevelUnit;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withParentUnit() instead
     * @return $this
     */
    public function withParentUnitBuilder(?BusinessUnitKeyReferenceBuilder $parentUnit)
    {
        $this->parentUnit = $parentUnit;

        return $this;
    }

    /**
     * @deprecated use withTopLevelUnit() instead
     * @return $this
     */
    public function withTopLevelUnitBuilder(?BusinessUnitKeyReferenceBuilder $topLevelUnit)
    {
        $this->topLevelUnit = $topLevelUnit;

        return $this;
    }

    public function build(): Division
    {
        return new DivisionModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->key,
            $this->status,
            $this->stores,
            $this->storeMode,
            $this->name,
            $this->contactEmail,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->addresses,
            $this->shippingAddressIds,
            $this->defaultShippingAddressId,
            $this->billingAddressIds,
            $this->defaultBillingAddressId,
            $this->associateMode,
            $this->associates,
            $this->inheritedAssociates,
            $this->parentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->parentUnit->build() : $this->parentUnit,
            $this->topLevelUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->topLevelUnit->build() : $this->topLevelUnit
        );
    }

    public static function of(): DivisionBuilder
    {
        return new self();
    }
}
