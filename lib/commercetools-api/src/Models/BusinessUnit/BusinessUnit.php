<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface BusinessUnit extends BaseResource
{
    public const DISCRIMINATOR_FIELD = 'unitType';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_STATUS = 'status';
    public const FIELD_STORES = 'stores';
    public const FIELD_STORE_MODE = 'storeMode';
    public const FIELD_UNIT_TYPE = 'unitType';
    public const FIELD_NAME = 'name';
    public const FIELD_CONTACT_EMAIL = 'contactEmail';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_SHIPPING_ADDRESS_IDS = 'shippingAddressIds';
    public const FIELD_DEFAULT_SHIPPING_ADDRESS_ID = 'defaultShippingAddressId';
    public const FIELD_BILLING_ADDRESS_IDS = 'billingAddressIds';
    public const FIELD_DEFAULT_BILLING_ADDRESS_ID = 'defaultBillingAddressId';
    public const FIELD_ASSOCIATE_MODE = 'associateMode';
    public const FIELD_ASSOCIATES = 'associates';
    public const FIELD_INHERITED_ASSOCIATES = 'inheritedAssociates';
    public const FIELD_PARENT_UNIT = 'parentUnit';
    public const FIELD_TOP_LEVEL_UNIT = 'topLevelUnit';

    /**
     * <p>Unique identifier of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Business Unit.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Business Unit was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Business Unit was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the BusinessUnit.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the BusinessUnit.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique and immutable identifier of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Indicates whether the Business Unit can be edited and used in <a href="/../api/projects/orders">Orders</a>.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p>References to <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Only present when <code>storeMode</code> is <code>Explicit</code>.</p>
     * <p>If the Business Unit has Stores defined, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must belong to one of the Business Unit's Stores.</p>
     * <p>If the Business Unit has no Stores, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must not belong to any Store.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * <p>Defines whether the Stores of the Business Unit are set directly on the Business Unit or are inherited from a parent.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * <p>Type of the Business Unit indicating its position in a hierarchy.</p>
     *

     * @return null|string
     */
    public function getUnitType();

    /**
     * <p>Name of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Email address of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getContactEmail();

    /**
     * <p>Custom Fields for the Business Unit.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Addresses used by the Business Unit.</p>
     *

     * @return null|AddressCollection
     */
    public function getAddresses();

    /**
     * <p>Unique identifiers of addresses used as shipping addresses.</p>
     *

     * @return null|array
     */
    public function getShippingAddressIds();

    /**
     * <p>Unique identifier of the address used as the default shipping address.</p>
     *

     * @return null|string
     */
    public function getDefaultShippingAddressId();

    /**
     * <p>Unique identifiers of addresses used as billing addresses.</p>
     *

     * @return null|array
     */
    public function getBillingAddressIds();

    /**
     * <p>Unique identifier of the address used as the default billing address.</p>
     *

     * @return null|string
     */
    public function getDefaultBillingAddressId();

    /**
     * <p>Set to <code>Explicit</code> to prevent the Business Unit inheriting Associates from a parent, set to <code>ExplicitAndFromParent</code> to enable inheritance.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * <p>Associates that are part of the Business Unit in specific <a href="ctp:api:type:AssociateRole">roles</a>.</p>
     *

     * @return null|AssociateCollection
     */
    public function getAssociates();

    /**
     * <p>Associates that are inherited from a parent Business Unit. The value of this field is <a href="/../api/general-concepts#eventual-consistency">eventually consistent</a> and is only present when the <code>associateMode</code> is set to <code>ExplicitAndFromParent</code>.</p>
     *

     * @return null|InheritedAssociateCollection
     */
    public function getInheritedAssociates();

    /**
     * <p>Parent unit of the Business Unit. Only present when the <code>unitType</code> is <code>Division</code>.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getParentUnit();

    /**
     * <p>Top-level unit of the Business Unit. The top-level unit is of <code>unitType</code> <code>Company</code>.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getTopLevelUnit();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $contactEmail
     */
    public function setContactEmail(?string $contactEmail): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?AddressCollection $addresses
     */
    public function setAddresses(?AddressCollection $addresses): void;

    /**
     * @param ?array $shippingAddressIds
     */
    public function setShippingAddressIds(?array $shippingAddressIds): void;

    /**
     * @param ?string $defaultShippingAddressId
     */
    public function setDefaultShippingAddressId(?string $defaultShippingAddressId): void;

    /**
     * @param ?array $billingAddressIds
     */
    public function setBillingAddressIds(?array $billingAddressIds): void;

    /**
     * @param ?string $defaultBillingAddressId
     */
    public function setDefaultBillingAddressId(?string $defaultBillingAddressId): void;

    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;

    /**
     * @param ?AssociateCollection $associates
     */
    public function setAssociates(?AssociateCollection $associates): void;

    /**
     * @param ?InheritedAssociateCollection $inheritedAssociates
     */
    public function setInheritedAssociates(?InheritedAssociateCollection $inheritedAssociates): void;

    /**
     * @param ?BusinessUnitKeyReference $parentUnit
     */
    public function setParentUnit(?BusinessUnitKeyReference $parentUnit): void;

    /**
     * @param ?BusinessUnitKeyReference $topLevelUnit
     */
    public function setTopLevelUnit(?BusinessUnitKeyReference $topLevelUnit): void;
}
