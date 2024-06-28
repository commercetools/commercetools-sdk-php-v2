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
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitDraft>
 */
final class BusinessUnitDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $status;

    /**

     * @var ?StoreResourceIdentifierCollection
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

     * @var ?string
     */
    private $associateMode;

    /**

     * @var ?AssociateDraftCollection
     */
    private $associates;

    /**

     * @var ?string
     */
    private $approvalRuleMode;

    /**

     * @var ?BaseAddressCollection
     */
    private $addresses;

    /**

     * @var ?array
     */
    private $shippingAddresses;

    /**

     * @var ?int
     */
    private $defaultShippingAddress;

    /**

     * @var ?array
     */
    private $billingAddresses;

    /**

     * @var ?int
     */
    private $defaultBillingAddress;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique and immutable identifier for the Business Unit.</p>
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
     * <p>Sets the <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Can only be set when <code>storeMode</code> is <code>Explicit</code>.
     * Defaults to empty for <a href="ctp:api:type:BusinessUnitType">Companies</a> and not set for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
     * <p>If the Business Unit has Stores defined, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must belong to one of the Business Unit's Stores.</p>
     * <p>If the Business Unit has no Stores, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must not belong to any Store.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * <p>Defines whether the Stores of the Business Unit are set directly on the Business Unit or are inherited from a parent.
     * <code>storeMode</code> is always <code>Explicit</code> for <a href="ctp:api:type:BusinessUnitType">Companies</a> and defaults to <code>FromParent</code> for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
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
     * <p>Determines whether the Business Unit can inherit Associates from a parent.
     * Always <code>Explicit</code> for <a href="ctp:api:type:BusinessUnitType">Companies</a> and defaults to <code>ExplicitAndFromParent</code> for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
     *

     * @return null|string
     */
    public function getAssociateMode()
    {
        return $this->associateMode;
    }

    /**
     * <p>List of members that are part of the Business Unit in specific <a href="ctp:api:type:AssociateRole">roles</a>.</p>
     *

     * @return null|AssociateDraftCollection
     */
    public function getAssociates()
    {
        return $this->associates;
    }

    /**
     * <p>Determines whether the Business Unit can inherit Approval Rules from a parent.
     * For <a href="ctp:api:type:BusinessUnitType">Companies</a>, the value of this field is always <code>Explicit</code>.
     * For <a href="ctp:api:type:BusinessUnitType">Divisions</a>, the default value is <code>ExplicitAndFromParent</code>.</p>
     *

     * @return null|string
     */
    public function getApprovalRuleMode()
    {
        return $this->approvalRuleMode;
    }

    /**
     * <p>Addresses used by the Business Unit.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <p>Indexes of entries in <code>addresses</code> to set as shipping addresses.
     * The <code>shippingAddressIds</code> of the <a href="ctp:api:type:Customer">Customer</a> will be replaced by these addresses.</p>
     *

     * @return null|array
     */
    public function getShippingAddresses()
    {
        return $this->shippingAddresses;
    }

    /**
     * <p>Index of the entry in <code>addresses</code> to set as the default shipping address.</p>
     *

     * @return null|int
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * <p>Indexes of entries in <code>addresses</code> to set as billing addresses.
     * The <code>billingAddressIds</code> of the <a href="ctp:api:type:Customer">Customer</a> will be replaced by these addresses.</p>
     *

     * @return null|array
     */
    public function getBillingAddresses()
    {
        return $this->billingAddresses;
    }

    /**
     * <p>Index of the entry in <code>addresses</code> to set as the default billing address.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * <p>Custom Fields for the Business Unit.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?StoreResourceIdentifierCollection $stores
     * @return $this
     */
    public function withStores(?StoreResourceIdentifierCollection $stores)
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
     * @param ?string $associateMode
     * @return $this
     */
    public function withAssociateMode(?string $associateMode)
    {
        $this->associateMode = $associateMode;

        return $this;
    }

    /**
     * @param ?AssociateDraftCollection $associates
     * @return $this
     */
    public function withAssociates(?AssociateDraftCollection $associates)
    {
        $this->associates = $associates;

        return $this;
    }

    /**
     * @param ?string $approvalRuleMode
     * @return $this
     */
    public function withApprovalRuleMode(?string $approvalRuleMode)
    {
        $this->approvalRuleMode = $approvalRuleMode;

        return $this;
    }

    /**
     * @param ?BaseAddressCollection $addresses
     * @return $this
     */
    public function withAddresses(?BaseAddressCollection $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @param ?array $shippingAddresses
     * @return $this
     */
    public function withShippingAddresses(?array $shippingAddresses)
    {
        $this->shippingAddresses = $shippingAddresses;

        return $this;
    }

    /**
     * @param ?int $defaultShippingAddress
     * @return $this
     */
    public function withDefaultShippingAddress(?int $defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;

        return $this;
    }

    /**
     * @param ?array $billingAddresses
     * @return $this
     */
    public function withBillingAddresses(?array $billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;

        return $this;
    }

    /**
     * @param ?int $defaultBillingAddress
     * @return $this
     */
    public function withDefaultBillingAddress(?int $defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;

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
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): BusinessUnitDraft
    {
        return new BusinessUnitDraftModel(
            $this->key,
            $this->status,
            $this->stores,
            $this->storeMode,
            $this->name,
            $this->contactEmail,
            $this->associateMode,
            $this->associates,
            $this->approvalRuleMode,
            $this->addresses,
            $this->shippingAddresses,
            $this->defaultShippingAddress,
            $this->billingAddresses,
            $this->defaultBillingAddress,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): BusinessUnitDraftBuilder
    {
        return new self();
    }
}
