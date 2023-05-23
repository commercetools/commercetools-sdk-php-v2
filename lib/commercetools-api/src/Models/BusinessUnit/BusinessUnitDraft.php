<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitDraft extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'unitType';
    public const FIELD_KEY = 'key';
    public const FIELD_STATUS = 'status';
    public const FIELD_STORES = 'stores';
    public const FIELD_STORE_MODE = 'storeMode';
    public const FIELD_UNIT_TYPE = 'unitType';
    public const FIELD_NAME = 'name';
    public const FIELD_CONTACT_EMAIL = 'contactEmail';
    public const FIELD_ASSOCIATE_MODE = 'associateMode';
    public const FIELD_ASSOCIATES = 'associates';
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_SHIPPING_ADDRESSES = 'shippingAddresses';
    public const FIELD_DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';
    public const FIELD_BILLING_ADDRESSES = 'billingAddresses';
    public const FIELD_DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier for the Business Unit.</p>
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
     * <p>Sets the <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Can only be set when <code>storeMode</code> is <code>Explicit</code>.
     * Defaults to empty for <a href="ctp:api:type:BusinessUnitType">Companies</a> and not set for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
     * <p>If the Business Unit has Stores defined, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must belong to one of the Business Unit's Stores.</p>
     * <p>If the Business Unit has no Stores, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must not belong to any Store.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    /**
     * <p>Defines whether the Stores of the Business Unit are set directly on the Business Unit or are inherited from a parent.
     * <code>storeMode</code> is always <code>Explicit</code> for <a href="ctp:api:type:BusinessUnitType">Companies</a> and defaults to <code>FromParent</code> for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
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
     * <p>Determines whether the Business Unit can inherit Associates from a parent.
     * Always <code>Explicit</code> for <a href="ctp:api:type:BusinessUnitType">Companies</a> and defaults to <code>ExplicitAndFromParent</code> for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * <p>List of members that are part of the Business Unit in specific <a href="ctp:api:type:AssociateRole">roles</a>.</p>
     *

     * @return null|AssociateDraftCollection
     */
    public function getAssociates();

    /**
     * <p>Addresses used by the Business Unit.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getAddresses();

    /**
     * <p>Indexes of entries in <code>addresses</code> to set as shipping addresses.
     * The <code>shippingAddressIds</code> of the <a href="ctp:api:type:Customer">Customer</a> will be replaced by these addresses.</p>
     *

     * @return null|array
     */
    public function getShippingAddresses();

    /**
     * <p>Index of the entry in <code>addresses</code> to set as the default shipping address.</p>
     *

     * @return null|int
     */
    public function getDefaultShippingAddress();

    /**
     * <p>Indexes of entries in <code>addresses</code> to set as billing addresses.
     * The <code>billingAddressIds</code> of the <a href="ctp:api:type:Customer">Customer</a> will be replaced by these addresses.</p>
     *

     * @return null|array
     */
    public function getBillingAddresses();

    /**
     * <p>Index of the entry in <code>addresses</code> to set as the default billing address.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress();

    /**
     * <p>Custom Fields for the Business Unit.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;

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
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;

    /**
     * @param ?AssociateDraftCollection $associates
     */
    public function setAssociates(?AssociateDraftCollection $associates): void;

    /**
     * @param ?BaseAddressCollection $addresses
     */
    public function setAddresses(?BaseAddressCollection $addresses): void;

    /**
     * @param ?array $shippingAddresses
     */
    public function setShippingAddresses(?array $shippingAddresses): void;

    /**
     * @param ?int $defaultShippingAddress
     */
    public function setDefaultShippingAddress(?int $defaultShippingAddress): void;

    /**
     * @param ?array $billingAddresses
     */
    public function setBillingAddresses(?array $billingAddresses): void;

    /**
     * @param ?int $defaultBillingAddress
     */
    public function setDefaultBillingAddress(?int $defaultBillingAddress): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
