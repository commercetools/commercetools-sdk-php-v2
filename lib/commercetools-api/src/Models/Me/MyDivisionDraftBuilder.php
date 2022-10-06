<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyDivisionDraft>
 */
final class MyDivisionDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

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
    private $defaultShipingAddress;

    /**

     * @var ?array
     */
    private $billingAddresses;

    /**

     * @var ?int
     */
    private $defaultBillingAddress;

    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $parentUnit;

    /**
     * <p>User-defined unique identifier for the BusinessUnit.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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
    public function getDefaultShipingAddress()
    {
        return $this->defaultShipingAddress;
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
     * <p>The parent unit of this Division. Can be a Company or a Division.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit()
    {
        return $this->parentUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->parentUnit->build() : $this->parentUnit;
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
     * @param ?int $defaultShipingAddress
     * @return $this
     */
    public function withDefaultShipingAddress(?int $defaultShipingAddress)
    {
        $this->defaultShipingAddress = $defaultShipingAddress;

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
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     * @return $this
     */
    public function withParentUnit(?BusinessUnitResourceIdentifier $parentUnit)
    {
        $this->parentUnit = $parentUnit;

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
    public function withParentUnitBuilder(?BusinessUnitResourceIdentifierBuilder $parentUnit)
    {
        $this->parentUnit = $parentUnit;

        return $this;
    }

    public function build(): MyDivisionDraft
    {
        return new MyDivisionDraftModel(
            $this->key,
            $this->name,
            $this->contactEmail,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->addresses,
            $this->shippingAddresses,
            $this->defaultShipingAddress,
            $this->billingAddresses,
            $this->defaultBillingAddress,
            $this->parentUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->parentUnit->build() : $this->parentUnit
        );
    }

    public static function of(): MyDivisionDraftBuilder
    {
        return new self();
    }
}
