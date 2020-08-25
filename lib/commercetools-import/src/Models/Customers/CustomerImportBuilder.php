<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customers;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\Address;
use Commercetools\Import\Models\Common\AddressBuilder;
use Commercetools\Import\Models\Common\AddressCollection;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceBuilder;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomBuilder;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CustomerImport>
 */
final class CustomerImportBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $customerNumber;

    /**
     * @var ?string
     */
    private $email;

    /**
     * @var ?string
     */
    private $password;

    /**
     * @var ?string
     */
    private $firstName;

    /**
     * @var ?string
     */
    private $lastName;

    /**
     * @var ?string
     */
    private $middleName;

    /**
     * @var ?string
     */
    private $title;

    /**
     * @var ?string
     */
    private $salutation;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var ?DateTimeImmutable
     */
    private $dateOfBirth;

    /**
     * @var ?string
     */
    private $companyName;

    /**
     * @var ?string
     */
    private $vatId;

    /**
     * @var ?bool
     */
    private $isEmailVerified;

    /**
     * @var null|CustomerGroupKeyReference|CustomerGroupKeyReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var ?AddressCollection
     */
    private $addresses;

    /**
     * @var null|Address|AddressBuilder
     */
    private $defaultBillingAddress;

    /**
     * @var null|Address|AddressBuilder
     */
    private $billingAddresses;

    /**
     * @var null|Address|AddressBuilder
     */
    private $defaultShippingAddress;

    /**
     * @var null|Address|AddressBuilder
     */
    private $shippingAddresses;

    /**
     * @var ?string
     */
    private $locale;

    /**
     * @var null|Custom|CustomBuilder
     */
    private $custom;

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>Customer.customerNumber</code>.</p>
     *
     * @return null|string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * <p>Maps to <code>Customer.email</code>.</p>
     *
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <p>Maps to <code>Customer.password</code>.</p>
     *
     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * <p>Maps to <code>Customer.firstName</code>.</p>
     *
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * <p>Maps to <code>Customer.lastName</code>.</p>
     *
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * <p>Maps to <code>Customer.middleName</code>.</p>
     *
     * @return null|string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * <p>Maps to <code>Customer.title</code>.</p>
     *
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * <p>Maps to <code>Customer.salutation</code>.</p>
     *
     * @return null|string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * <p>Maps to <code>Customer.externalId</code>.</p>
     *
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * <p>Maps to <code>Customer.dateOfBirth</code>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * <p>Maps to <code>Customer.companyName</code>.</p>
     *
     * @return null|string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * <p>Maps to <code>Customer.vatId</code>.</p>
     *
     * @return null|string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * <p>Maps to <code>Customer.isEmailVerified</code>.</p>
     *
     * @return null|bool
     */
    public function getIsEmailVerified()
    {
        return $this->isEmailVerified;
    }

    /**
     * <p>References a customer group by its key.</p>
     * <p>The customer group referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupKeyReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>Maps to <code>Customer.addresses</code>.</p>
     *
     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <p>Maps to <code>Customer.defaultBillingAddress</code>.</p>
     *
     * @return null|Address
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress instanceof AddressBuilder ? $this->defaultBillingAddress->build() : $this->defaultBillingAddress;
    }

    /**
     * <p>Maps to <code>Customer.billingAddresses</code>.</p>
     *
     * @return null|Address
     */
    public function getBillingAddresses()
    {
        return $this->billingAddresses instanceof AddressBuilder ? $this->billingAddresses->build() : $this->billingAddresses;
    }

    /**
     * <p>Maps to <code>Customer.defaultShippingAddress</code>.</p>
     *
     * @return null|Address
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress instanceof AddressBuilder ? $this->defaultShippingAddress->build() : $this->defaultShippingAddress;
    }

    /**
     * <p>Maps to <code>Customer.shippingAddresses</code>.</p>
     *
     * @return null|Address
     */
    public function getShippingAddresses()
    {
        return $this->shippingAddresses instanceof AddressBuilder ? $this->shippingAddresses->build() : $this->shippingAddresses;
    }

    /**
     * <p>Maps to <code>Customer.locale</code>.</p>
     *
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <p>The custom fields for this Customer.</p>
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
     * @param ?string $customerNumber
     * @return $this
     */
    public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * @param ?string $email
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param ?string $password
     * @return $this
     */
    public function withPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param ?string $firstName
     * @return $this
     */
    public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param ?string $lastName
     * @return $this
     */
    public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param ?string $middleName
     * @return $this
     */
    public function withMiddleName(?string $middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @param ?string $title
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param ?string $salutation
     * @return $this
     */
    public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $dateOfBirth
     * @return $this
     */
    public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @param ?string $companyName
     * @return $this
     */
    public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @param ?string $vatId
     * @return $this
     */
    public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * @param ?bool $isEmailVerified
     * @return $this
     */
    public function withIsEmailVerified(?bool $isEmailVerified)
    {
        $this->isEmailVerified = $isEmailVerified;

        return $this;
    }

    /**
     * @param ?CustomerGroupKeyReference $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupKeyReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

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
     * @param ?Address $defaultBillingAddress
     * @return $this
     */
    public function withDefaultBillingAddress(?Address $defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;

        return $this;
    }

    /**
     * @param ?Address $billingAddresses
     * @return $this
     */
    public function withBillingAddresses(?Address $billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;

        return $this;
    }

    /**
     * @param ?Address $defaultShippingAddress
     * @return $this
     */
    public function withDefaultShippingAddress(?Address $defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;

        return $this;
    }

    /**
     * @param ?Address $shippingAddresses
     * @return $this
     */
    public function withShippingAddresses(?Address $shippingAddresses)
    {
        $this->shippingAddresses = $shippingAddresses;

        return $this;
    }

    /**
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

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
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupKeyReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDefaultBillingAddressBuilder(?AddressBuilder $defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withBillingAddressesBuilder(?AddressBuilder $billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDefaultShippingAddressBuilder(?AddressBuilder $defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingAddressesBuilder(?AddressBuilder $shippingAddresses)
    {
        $this->shippingAddresses = $shippingAddresses;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): CustomerImport
    {
        return new CustomerImportModel(
            $this->key,
            $this->customerNumber,
            $this->email,
            $this->password,
            $this->firstName,
            $this->lastName,
            $this->middleName,
            $this->title,
            $this->salutation,
            $this->externalId,
            $this->dateOfBirth,
            $this->companyName,
            $this->vatId,
            $this->isEmailVerified,
            $this->customerGroup instanceof CustomerGroupKeyReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->addresses,
            $this->defaultBillingAddress instanceof AddressBuilder ? $this->defaultBillingAddress->build() : $this->defaultBillingAddress,
            $this->billingAddresses instanceof AddressBuilder ? $this->billingAddresses->build() : $this->billingAddresses,
            $this->defaultShippingAddress instanceof AddressBuilder ? $this->defaultShippingAddress->build() : $this->defaultShippingAddress,
            $this->shippingAddresses instanceof AddressBuilder ? $this->shippingAddresses->build() : $this->shippingAddresses,
            $this->locale,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): CustomerImportBuilder
    {
        return new self();
    }
}
