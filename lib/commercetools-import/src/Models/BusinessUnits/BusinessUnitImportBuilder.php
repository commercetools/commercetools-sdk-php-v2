<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\AddressCollection;
use Commercetools\Import\Models\Common\StoreKeyReferenceCollection;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomBuilder;
use stdClass;

/**
 * @implements Builder<BusinessUnitImport>
 */
final class BusinessUnitImportBuilder implements Builder
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
    private $status;

    /**

     * @var ?string
     */
    private $contactEmail;

    /**

     * @var ?AssociateDraftCollection
     */
    private $associates;

    /**

     * @var ?AddressCollection
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

     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

    /**

     * @var null|Custom|CustomBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:BusinessUnit">BusinessUnit</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The name of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>The status of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <p>The contact email address for the Business Unit.</p>
     *

     * @return null|string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * <p>List of Associates to be assigned to the Business Unit.</p>
     *

     * @return null|AssociateDraftCollection
     */
    public function getAssociates()
    {
        return $this->associates;
    }

    /**
     * <p>The addresses for the Business Unit.</p>
     *

     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <p>The indices of the shipping addresses in the <code>addresses</code> array.</p>
     *

     * @return null|array
     */
    public function getShippingAddresses()
    {
        return $this->shippingAddresses;
    }

    /**
     * <p>The index of the default shipping address in the <code>addresses</code> array.</p>
     *

     * @return null|int
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * <p>The indices of the billing addresses in the <code>addresses</code> array.</p>
     *

     * @return null|array
     */
    public function getBillingAddresses()
    {
        return $this->billingAddresses;
    }

    /**
     * <p>The index of the default billing address in the <code>addresses</code> array.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * <p>The Stores of the Business Unit.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * <p>Custom fields for the Business Unit.</p>
     *

     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

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
     * @param ?AssociateDraftCollection $associates
     * @return $this
     */
    public function withAssociates(?AssociateDraftCollection $associates)
    {
        $this->associates = $associates;

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
     * @param ?StoreKeyReferenceCollection $stores
     * @return $this
     */
    public function withStores(?StoreKeyReferenceCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }

    /**
     * @param ?Custom $custom
     * @return $this
     */
    public function withCustom(?Custom $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): BusinessUnitImport
    {
        return new BusinessUnitImportModel(
            $this->key,
            $this->name,
            $this->status,
            $this->contactEmail,
            $this->associates,
            $this->addresses,
            $this->shippingAddresses,
            $this->defaultShippingAddress,
            $this->billingAddresses,
            $this->defaultBillingAddress,
            $this->stores,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): BusinessUnitImportBuilder
    {
        return new self();
    }
}
