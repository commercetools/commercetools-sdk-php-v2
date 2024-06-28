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
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DivisionDraftModel extends JsonObjectModel implements DivisionDraft
{
    public const DISCRIMINATOR_VALUE = 'Division';
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
     * @var ?StoreResourceIdentifierCollection
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
     * @var ?string
     */
    protected $associateMode;

    /**
     *
     * @var ?AssociateDraftCollection
     */
    protected $associates;

    /**
     *
     * @var ?string
     */
    protected $approvalRuleMode;

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
    protected $defaultShippingAddress;

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
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $parentUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $status = null,
        ?StoreResourceIdentifierCollection $stores = null,
        ?string $storeMode = null,
        ?string $name = null,
        ?string $contactEmail = null,
        ?string $associateMode = null,
        ?AssociateDraftCollection $associates = null,
        ?string $approvalRuleMode = null,
        ?BaseAddressCollection $addresses = null,
        ?array $shippingAddresses = null,
        ?int $defaultShippingAddress = null,
        ?array $billingAddresses = null,
        ?int $defaultBillingAddress = null,
        ?CustomFieldsDraft $custom = null,
        ?BusinessUnitResourceIdentifier $parentUnit = null,
        ?string $unitType = null
    ) {
        $this->key = $key;
        $this->status = $status;
        $this->stores = $stores;
        $this->storeMode = $storeMode;
        $this->name = $name;
        $this->contactEmail = $contactEmail;
        $this->associateMode = $associateMode;
        $this->associates = $associates;
        $this->approvalRuleMode = $approvalRuleMode;
        $this->addresses = $addresses;
        $this->shippingAddresses = $shippingAddresses;
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->billingAddresses = $billingAddresses;
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->custom = $custom;
        $this->parentUnit = $parentUnit;
        $this->unitType = $unitType ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>User-defined unique and immutable identifier for the Business Unit.</p>
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
     * <p>Sets the <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Can only be set when <code>storeMode</code> is <code>Explicit</code>.
     * Defaults to empty for <a href="ctp:api:type:BusinessUnitType">Companies</a> and not set for <a href="ctp:api:type:BusinessUnitType">Divisions</a>.</p>
     * <p>If the Business Unit has Stores defined, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must belong to one of the Business Unit's Stores.</p>
     * <p>If the Business Unit has no Stores, then all of its <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:Quote">Quotes</a>, or <a href="ctp:api:type:QuoteRequest">Quote Requests</a> must not belong to any Store.</p>
     *
     *
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreResourceIdentifierCollection::fromArray($data);
        }

        return $this->stores;
    }

    /**
     * <p>If not set, the Division inherits the <a href="ctp:api:type:Store">Stores</a> from a parent unit.
     * Set this to <code>Explicit</code> if you want to set the Stores explicitly in the <code>stores</code> field instead.</p>
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
     * <p>Determines whether the Division can inherit Approval Rules from a parent.</p>
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
    public function getDefaultShippingAddress()
    {
        if (is_null($this->defaultShippingAddress)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DEFAULT_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }
            $this->defaultShippingAddress = (int) $data;
        }

        return $this->defaultShippingAddress;
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
     * <p>The parent unit of this Division. Can be a Company or a Division.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit()
    {
        if (is_null($this->parentUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARENT_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->parentUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->parentUnit;
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
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void
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
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void
    {
        $this->associateMode = $associateMode;
    }

    /**
     * @param ?AssociateDraftCollection $associates
     */
    public function setAssociates(?AssociateDraftCollection $associates): void
    {
        $this->associates = $associates;
    }

    /**
     * @param ?string $approvalRuleMode
     */
    public function setApprovalRuleMode(?string $approvalRuleMode): void
    {
        $this->approvalRuleMode = $approvalRuleMode;
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
     * @param ?int $defaultShippingAddress
     */
    public function setDefaultShippingAddress(?int $defaultShippingAddress): void
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
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

    /**
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     */
    public function setParentUnit(?BusinessUnitResourceIdentifier $parentUnit): void
    {
        $this->parentUnit = $parentUnit;
    }
}
