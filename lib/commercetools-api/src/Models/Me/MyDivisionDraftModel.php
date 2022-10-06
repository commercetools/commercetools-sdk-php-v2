<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyDivisionDraftModel extends JsonObjectModel implements MyDivisionDraft
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
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $parentUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $name = null,
        ?string $contactEmail = null,
        ?CustomFields $custom = null,
        ?BaseAddressCollection $addresses = null,
        ?array $shippingAddresses = null,
        ?int $defaultShipingAddress = null,
        ?array $billingAddresses = null,
        ?int $defaultBillingAddress = null,
        ?BusinessUnitResourceIdentifier $parentUnit = null,
        ?string $unitType = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->contactEmail = $contactEmail;
        $this->custom = $custom;
        $this->addresses = $addresses;
        $this->shippingAddresses = $shippingAddresses;
        $this->defaultShipingAddress = $defaultShipingAddress;
        $this->billingAddresses = $billingAddresses;
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->parentUnit = $parentUnit;
        $this->unitType = $unitType ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>User-defined unique identifier for the BusinessUnit.</p>
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
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     */
    public function setParentUnit(?BusinessUnitResourceIdentifier $parentUnit): void
    {
        $this->parentUnit = $parentUnit;
    }
}
