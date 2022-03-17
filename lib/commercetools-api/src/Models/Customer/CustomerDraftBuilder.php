<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CustomerDraft>
 */
final class CustomerDraftBuilder implements Builder
{
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
    private $anonymousCartId;

    /**
     * @var null|CartResourceIdentifier|CartResourceIdentifierBuilder
     */
    private $anonymousCart;

    /**
     * @var ?string
     */
    private $anonymousId;

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
     * @var ?BaseAddressCollection
     */
    private $addresses;

    /**
     * @var ?int
     */
    private $defaultShippingAddress;

    /**
     * @var ?array
     */
    private $shippingAddresses;

    /**
     * @var ?int
     */
    private $defaultBillingAddress;

    /**
     * @var ?array
     */
    private $billingAddresses;

    /**
     * @var ?bool
     */
    private $isEmailVerified;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var null|CustomerGroupResourceIdentifier|CustomerGroupResourceIdentifierBuilder
     */
    private $customerGroup;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var ?string
     */
    private $locale;

    /**
     * @var ?string
     */
    private $salutation;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
     * @var ?string
     */
    private $authenticationMode;

    /**
     * <p>String that uniquely identifies a customer.
     * It can be used to create more human-readable (in contrast to ID) identifier for the customer.
     * It should be <strong>unique</strong> across a project.
     * Once it's set it cannot be changed.</p>
     *
     * @return null|string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * <p>The customer's email address and the main identifier of uniqueness for a customer account.
     * Email addresses are either unique to the store they're specified for, <em>or</em> for the entire project, and are case insensitive.
     * For more information, see Email uniquenes.</p>
     *
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <p>Only optional with <code>authenticationMode</code> set to <code>ExternalAuth</code>.</p>
     *
     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return null|string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * <p>Identifies a single cart that will be assigned to the new customer account.</p>
     *
     * @return null|string
     */
    public function getAnonymousCartId()
    {
        return $this->anonymousCartId;
    }

    /**
     * <p>Identifies a single cart that will be assigned to the new customer account.</p>
     *
     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart()
    {
        return $this->anonymousCart instanceof CartResourceIdentifierBuilder ? $this->anonymousCart->build() : $this->anonymousCart;
    }

    /**
     * <p>Identifies carts and orders belonging to an anonymous session that will be assigned to the new customer account.</p>
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @return null|string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return null|string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * <p>Sets the ID of each address to be unique in the addresses list.</p>
     *
     * @return null|BaseAddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <p>The index of the address in the addresses array.
     * The <code>defaultShippingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * <p>The indices of the shipping addresses in the addresses array.
     * The <code>shippingAddressIds</code> of the Customer will be set to the IDs of that addresses.</p>
     *
     * @return null|array
     */
    public function getShippingAddresses()
    {
        return $this->shippingAddresses;
    }

    /**
     * <p>The index of the address in the addresses array.
     * The <code>defaultBillingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * <p>The indices of the billing addresses in the addresses array.
     * The <code>billingAddressIds</code> of the customer will be set to the IDs of that addresses.</p>
     *
     * @return null|array
     */
    public function getBillingAddresses()
    {
        return $this->billingAddresses;
    }

    /**
     * @return null|bool
     */
    public function getIsEmailVerified()
    {
        return $this->isEmailVerified;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Must be one of the languages supported for this project</p>
     *
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return null|string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * <p>User-specific unique identifier for a customer.
     * Must be unique across a project.
     * The field can be reset using the Set Key UpdateAction</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>References to the stores the customer account is associated with.
     * If no stores are specified, the customer is a global customer, and can log in using the Password Flow for global Customers.
     * If one or more stores are specified, the customer can only log in using the Password Flow for Customers in a Store for those specific stores.</p>
     *
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * <p>Defines whether a password is required for the Customer that is used for platform-internal authentication.</p>
     *
     * @return null|string
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode;
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
     * @param ?string $anonymousCartId
     * @return $this
     */
    public function withAnonymousCartId(?string $anonymousCartId)
    {
        $this->anonymousCartId = $anonymousCartId;

        return $this;
    }

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     * @return $this
     */
    public function withAnonymousCart(?CartResourceIdentifier $anonymousCart)
    {
        $this->anonymousCart = $anonymousCart;

        return $this;
    }

    /**
     * @param ?string $anonymousId
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

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
     * @param ?BaseAddressCollection $addresses
     * @return $this
     */
    public function withAddresses(?BaseAddressCollection $addresses)
    {
        $this->addresses = $addresses;

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
     * @param ?bool $isEmailVerified
     * @return $this
     */
    public function withIsEmailVerified(?bool $isEmailVerified)
    {
        $this->isEmailVerified = $isEmailVerified;

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
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;

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
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

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
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

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
     * @param ?string $authenticationMode
     * @return $this
     */
    public function withAuthenticationMode(?string $authenticationMode)
    {
        $this->authenticationMode = $authenticationMode;

        return $this;
    }

    /**
     * @deprecated use withAnonymousCart() instead
     * @return $this
     */
    public function withAnonymousCartBuilder(?CartResourceIdentifierBuilder $anonymousCart)
    {
        $this->anonymousCart = $anonymousCart;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

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

    public function build(): CustomerDraft
    {
        return new CustomerDraftModel(
            $this->customerNumber,
            $this->email,
            $this->password,
            $this->firstName,
            $this->lastName,
            $this->middleName,
            $this->title,
            $this->anonymousCartId,
            $this->anonymousCart instanceof CartResourceIdentifierBuilder ? $this->anonymousCart->build() : $this->anonymousCart,
            $this->anonymousId,
            $this->dateOfBirth,
            $this->companyName,
            $this->vatId,
            $this->addresses,
            $this->defaultShippingAddress,
            $this->shippingAddresses,
            $this->defaultBillingAddress,
            $this->billingAddresses,
            $this->isEmailVerified,
            $this->externalId,
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->locale,
            $this->salutation,
            $this->key,
            $this->stores,
            $this->authenticationMode
        );
    }

    public static function of(): CustomerDraftBuilder
    {
        return new self();
    }
}
