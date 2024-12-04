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
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceBuilder;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Common\StoreKeyReferenceCollection;
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

     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

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

     * @var ?CustomerAddressCollection
     */
    private $addresses;

    /**

     * @var ?int
     */
    private $defaultBillingAddress;

    /**

     * @var ?array
     */
    private $billingAddresses;

    /**

     * @var ?int
     */
    private $defaultShippingAddress;

    /**

     * @var ?array
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

     * @var ?string
     */
    private $authenticationMode;

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:Customer">Customer</a> with this <code>key</code> exists, it will be updated with the imported data.</p>
     *

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
     * <p>Required when <code>authenticationMode</code> is set to <code>Password</code>. Maps to <code>Customer.password</code>.</p>
     *

     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * <p>The References to the Stores with which the Customer is associated. If referenced Stores do not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Stores are created.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
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
     * <p>The Reference to the <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> with which the Customer is associated.
     * If referenced CustomerGroup does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary CustomerGroup is created.</p>
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

     * @return null|CustomerAddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <p>The index of the address in the addresses array. The <code>defaultBillingAddressId</code> of the customer will be set to the ID of that address.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * <p>The indices of the billing addresses in the addresses array. The <code>billingAddressIds</code> of the customer will be set to the IDs of that addresses.</p>
     *

     * @return null|array
     */
    public function getBillingAddresses()
    {
        return $this->billingAddresses;
    }

    /**
     * <p>The index of the address in the addresses array. The <code>defaultShippingAddressId</code> of the customer will be set to the ID of that address.</p>
     *

     * @return null|int
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * <p>The indices of the shipping addresses in the addresses array. The <code>shippingAddressIds</code> of the customer will be set to the IDs of that addresses.</p>
     *

     * @return null|array
     */
    public function getShippingAddresses()
    {
        return $this->shippingAddresses;
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
     * <p>The Custom Fields for this Customer.</p>
     *

     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <ul>
     * <li>Set to <code>Password</code> to make the <code>password</code> field required for the Customer.</li>
     * <li>Set to <code>ExternalAuth</code> when the password is not required for the Customer.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode;
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
     * @param ?StoreKeyReferenceCollection $stores
     * @return $this
     */
    public function withStores(?StoreKeyReferenceCollection $stores)
    {
        $this->stores = $stores;

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
     * @param ?CustomerAddressCollection $addresses
     * @return $this
     */
    public function withAddresses(?CustomerAddressCollection $addresses)
    {
        $this->addresses = $addresses;

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
     * @param ?array $billingAddresses
     * @return $this
     */
    public function withBillingAddresses(?array $billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;

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
     * @param ?array $shippingAddresses
     * @return $this
     */
    public function withShippingAddresses(?array $shippingAddresses)
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
     * @param ?string $authenticationMode
     * @return $this
     */
    public function withAuthenticationMode(?string $authenticationMode)
    {
        $this->authenticationMode = $authenticationMode;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupKeyReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

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

    public function build(): CustomerImport
    {
        return new CustomerImportModel(
            $this->key,
            $this->customerNumber,
            $this->email,
            $this->password,
            $this->stores,
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
            $this->defaultBillingAddress,
            $this->billingAddresses,
            $this->defaultShippingAddress,
            $this->shippingAddresses,
            $this->locale,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom,
            $this->authenticationMode
        );
    }

    public static function of(): CustomerImportBuilder
    {
        return new self();
    }
}
