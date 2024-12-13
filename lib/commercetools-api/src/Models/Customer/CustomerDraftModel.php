<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierModel;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CustomerDraftModel extends JsonObjectModel implements CustomerDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $customerNumber;

    /**
     *
     * @var ?string
     */
    protected $externalId;

    /**
     *
     * @var ?string
     */
    protected $email;

    /**
     *
     * @var ?string
     */
    protected $password;

    /**
     *
     * @var ?string
     */
    protected $firstName;

    /**
     *
     * @var ?string
     */
    protected $lastName;

    /**
     *
     * @var ?string
     */
    protected $middleName;

    /**
     *
     * @var ?string
     */
    protected $title;

    /**
     * @deprecated
     * @var ?string
     */
    protected $anonymousCartId;

    /**
     *
     * @var ?CartResourceIdentifier
     */
    protected $anonymousCart;

    /**
     *
     * @var ?string
     */
    protected $anonymousId;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;

    /**
     *
     * @var ?string
     */
    protected $companyName;

    /**
     *
     * @var ?string
     */
    protected $vatId;

    /**
     *
     * @var ?BaseAddressCollection
     */
    protected $addresses;

    /**
     *
     * @var ?int
     */
    protected $defaultShippingAddress;

    /**
     *
     * @var ?array
     */
    protected $shippingAddresses;

    /**
     *
     * @var ?int
     */
    protected $defaultBillingAddress;

    /**
     *
     * @var ?array
     */
    protected $billingAddresses;

    /**
     *
     * @var ?bool
     */
    protected $isEmailVerified;

    /**
     *
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     *
     * @var ?string
     */
    protected $locale;

    /**
     *
     * @var ?string
     */
    protected $salutation;

    /**
     *
     * @var ?StoreResourceIdentifierCollection
     */
    protected $stores;

    /**
     *
     * @var ?string
     */
    protected $authenticationMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $customerNumber = null,
        ?string $externalId = null,
        ?string $email = null,
        ?string $password = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $middleName = null,
        ?string $title = null,
        ?string $anonymousCartId = null,
        ?CartResourceIdentifier $anonymousCart = null,
        ?string $anonymousId = null,
        ?DateTimeImmutable $dateOfBirth = null,
        ?string $companyName = null,
        ?string $vatId = null,
        ?BaseAddressCollection $addresses = null,
        ?int $defaultShippingAddress = null,
        ?array $shippingAddresses = null,
        ?int $defaultBillingAddress = null,
        ?array $billingAddresses = null,
        ?bool $isEmailVerified = null,
        ?CustomerGroupResourceIdentifier $customerGroup = null,
        ?CustomFieldsDraft $custom = null,
        ?string $locale = null,
        ?string $salutation = null,
        ?StoreResourceIdentifierCollection $stores = null,
        ?string $authenticationMode = null
    ) {
        $this->key = $key;
        $this->customerNumber = $customerNumber;
        $this->externalId = $externalId;
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->title = $title;
        $this->anonymousCartId = $anonymousCartId;
        $this->anonymousCart = $anonymousCart;
        $this->anonymousId = $anonymousId;
        $this->dateOfBirth = $dateOfBirth;
        $this->companyName = $companyName;
        $this->vatId = $vatId;
        $this->addresses = $addresses;
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->shippingAddresses = $shippingAddresses;
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->billingAddresses = $billingAddresses;
        $this->isEmailVerified = $isEmailVerified;
        $this->customerGroup = $customerGroup;
        $this->custom = $custom;
        $this->locale = $locale;
        $this->salutation = $salutation;
        $this->stores = $stores;
        $this->authenticationMode = $authenticationMode;
    }

    /**
     * <p>User-defined unique identifier for the Customer.
     * The <code>key</code> field is preferred over <code>customerNumber</code> as it is mutable and provides more flexibility.</p>
     * <p>This field is optional for backwards compatibility reasons, but we strongly recommend setting it. Keys are mandatory for importing Customers with the <a href="/../import-export/overview">Import API</a>.</p>
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
     * <p>User-defined unique identifier for a Customer.
     * Once set, it cannot be changed.</p>
     * <p>Can be used to refer to a Customer in a human-readable way (in emails, invoices, and other correspondence).</p>
     *
     *
     * @return null|string
     */
    public function getCustomerNumber()
    {
        if (is_null($this->customerNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->customerNumber = (string) $data;
        }

        return $this->customerNumber;
    }

    /**
     * <p>Optional identifier for use in external systems like customer relationship management (CRM) or enterprise resource planning (ERP).</p>
     *
     *
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * <p>Email address of the Customer that must be <a href="/../api/customers-overview#customer-uniqueness">unique</a> for an entire Project or to a Store the Customer is assigned to.
     * It is the mandatory unique identifier of a Customer.</p>
     *
     *
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * <p>Required when <code>authenticationMode</code> is set to <code>Password</code>.
     * Provide the Customer's password in plain text. The API stores passwords in an encrypted format.</p>
     *
     *
     * @return null|string
     */
    public function getPassword()
    {
        if (is_null($this->password)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->password = (string) $data;
        }

        return $this->password;
    }

    /**
     * <p>Given name (first name) of the Customer.</p>
     *
     *
     * @return null|string
     */
    public function getFirstName()
    {
        if (is_null($this->firstName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIRST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->firstName = (string) $data;
        }

        return $this->firstName;
    }

    /**
     * <p>Family name (last name) of the Customer.</p>
     *
     *
     * @return null|string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->lastName = (string) $data;
        }

        return $this->lastName;
    }

    /**
     * <p>Middle name of the Customer.</p>
     *
     *
     * @return null|string
     */
    public function getMiddleName()
    {
        if (is_null($this->middleName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MIDDLE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->middleName = (string) $data;
        }

        return $this->middleName;
    }

    /**
     * <p>Title of the Customer, for example, 'Dr.'.</p>
     *
     *
     * @return null|string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TITLE);
            if (is_null($data)) {
                return null;
            }
            $this->title = (string) $data;
        }

        return $this->title;
    }

    /**
     * <p>Deprecated since an anonymous <a href="ctp:api:type:Cart">Cart</a> can be identified by its <code>id</code> or external <code>key</code>.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getAnonymousCartId()
    {
        if (is_null($this->anonymousCartId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_CART_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousCartId = (string) $data;
        }

        return $this->anonymousCartId;
    }

    /**
     * <p>Identifies a <a href="ctp:api:type:Cart">Cart</a> that will be assigned to the new Customer.</p>
     *
     *
     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart()
    {
        if (is_null($this->anonymousCart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_CART);
            if (is_null($data)) {
                return null;
            }

            $this->anonymousCart = CartResourceIdentifierModel::of($data);
        }

        return $this->anonymousCart;
    }

    /**
     * <p>Identifies Carts and Orders belonging to an anonymous session that will be assigned to the new Customer.</p>
     *
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * <p>Date of birth of the Customer.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        if (is_null($this->dateOfBirth)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DATE_OF_BIRTH);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATE_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->dateOfBirth = $data;
        }

        return $this->dateOfBirth;
    }

    /**
     * <p>Company name of the Customer. When representing a company as a Customer, <a href="ctp:api:type:BusinessUnit">Business Units</a> provide extended funtionality.</p>
     *
     *
     * @return null|string
     */
    public function getCompanyName()
    {
        if (is_null($this->companyName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COMPANY_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->companyName = (string) $data;
        }

        return $this->companyName;
    }

    /**
     * <p>Individual VAT ID of the Customer.</p>
     *
     *
     * @return null|string
     */
    public function getVatId()
    {
        if (is_null($this->vatId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VAT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->vatId = (string) $data;
        }

        return $this->vatId;
    }

    /**
     * <p>Addresses of the Customer.</p>
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
     * <p>Index of the address in the <code>addresses</code> array to use as the default shipping address.
     * The <code>defaultShippingAddressId</code> of the Customer will be set to the <code>id</code> of that address.</p>
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
     * <p>Indices of the shipping addresses in the <code>addresses</code> array.
     * The <code>shippingAddressIds</code> of the Customer will be set to the IDs of these addresses.</p>
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
     * <p>Index of the address in the <code>addresses</code> array to use as the default billing address.
     * The <code>defaultBillingAddressId</code> of the Customer will be set to the <code>id</code> of that address.</p>
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
     * <p>Indices of the billing addresses in the <code>addresses</code> array.
     * The <code>billingAddressIds</code> of the Customer will be set to the IDs of these addresses.</p>
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
     * <p>Set to <code>true</code> if the email address of the Customer has been verified already.
     * The intended use is to leave this field unset upon sign-up of the Customer and initiate the <a href="#email-verification-of-customer">email verification</a> afterwards.</p>
     *
     *
     * @return null|bool
     */
    public function getIsEmailVerified()
    {
        if (is_null($this->isEmailVerified)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_EMAIL_VERIFIED);
            if (is_null($data)) {
                return null;
            }
            $this->isEmailVerified = (bool) $data;
        }

        return $this->isEmailVerified;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for the Customer.</p>
     *
     *
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupResourceIdentifierModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>Custom Fields for the Customer.</p>
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
     * <p>Preferred language of the Customer.
     * Must be one of the languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *
     *
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * <p>Salutation of the Customer, for example, 'Mr.' or 'Mrs.'.</p>
     *
     *
     * @return null|string
     */
    public function getSalutation()
    {
        if (is_null($this->salutation)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SALUTATION);
            if (is_null($data)) {
                return null;
            }
            $this->salutation = (string) $data;
        }

        return $this->salutation;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:Store">Stores</a> for the Customer.</p>
     * <ul>
     * <li>If no Stores are specified, the Customer is a global customer, and can log in using the <a href="/../api/authorization#password-flow-for-global-customers">Password Flow for global Customers</a>.</li>
     * <li>If any Stores are specified, the Customer can only log in using the <a href="/../api/authorization#password-flow-for-customers-in-a-store">Password Flow for Customers in a Store</a> for those specific Stores.</li>
     * </ul>
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
     * <ul>
     * <li>Set to <code>Password</code> to make the <code>password</code> field required for the Customer.</li>
     * <li>Set to <code>ExternalAuth</code> when the password is not required for the Customer.</li>
     * </ul>
     *
     *
     * @return null|string
     */
    public function getAuthenticationMode()
    {
        if (is_null($this->authenticationMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_AUTHENTICATION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->authenticationMode = (string) $data;
        }

        return $this->authenticationMode;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param ?string $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param ?string $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param ?string $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param ?string $middleName
     */
    public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param ?string $anonymousCartId
     */
    public function setAnonymousCartId(?string $anonymousCartId): void
    {
        $this->anonymousCartId = $anonymousCartId;
    }

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     */
    public function setAnonymousCart(?CartResourceIdentifier $anonymousCart): void
    {
        $this->anonymousCart = $anonymousCart;
    }

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?DateTimeImmutable $dateOfBirth
     */
    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @param ?string $companyName
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @param ?string $vatId
     */
    public function setVatId(?string $vatId): void
    {
        $this->vatId = $vatId;
    }

    /**
     * @param ?BaseAddressCollection $addresses
     */
    public function setAddresses(?BaseAddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @param ?int $defaultShippingAddress
     */
    public function setDefaultShippingAddress(?int $defaultShippingAddress): void
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
    }

    /**
     * @param ?array $shippingAddresses
     */
    public function setShippingAddresses(?array $shippingAddresses): void
    {
        $this->shippingAddresses = $shippingAddresses;
    }

    /**
     * @param ?int $defaultBillingAddress
     */
    public function setDefaultBillingAddress(?int $defaultBillingAddress): void
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
    }

    /**
     * @param ?array $billingAddresses
     */
    public function setBillingAddresses(?array $billingAddresses): void
    {
        $this->billingAddresses = $billingAddresses;
    }

    /**
     * @param ?bool $isEmailVerified
     */
    public function setIsEmailVerified(?bool $isEmailVerified): void
    {
        $this->isEmailVerified = $isEmailVerified;
    }

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void
    {
        $this->stores = $stores;
    }

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void
    {
        $this->authenticationMode = $authenticationMode;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CustomerDraft::FIELD_DATE_OF_BIRTH]) && $data[CustomerDraft::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[CustomerDraft::FIELD_DATE_OF_BIRTH] = $data[CustomerDraft::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object) $data;
    }
}
