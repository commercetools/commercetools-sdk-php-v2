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
     * @var ?string
     */
    protected $customerNumber;

    /**
     * @var ?string
     */
    protected $email;

    /**
     * @var ?string
     */
    protected $password;

    /**
     * @var ?string
     */
    protected $firstName;

    /**
     * @var ?string
     */
    protected $lastName;

    /**
     * @var ?string
     */
    protected $middleName;

    /**
     * @var ?string
     */
    protected $title;

    /**
     * @var ?string
     */
    protected $anonymousCartId;

    /**
     * @var ?CartResourceIdentifier
     */
    protected $anonymousCart;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;

    /**
     * @var ?string
     */
    protected $companyName;

    /**
     * @var ?string
     */
    protected $vatId;

    /**
     * @var ?BaseAddressCollection
     */
    protected $addresses;

    /**
     * @var ?int
     */
    protected $defaultShippingAddress;

    /**
     * @var ?array
     */
    protected $shippingAddresses;

    /**
     * @var ?int
     */
    protected $defaultBillingAddress;

    /**
     * @var ?array
     */
    protected $billingAddresses;

    /**
     * @var ?bool
     */
    protected $isEmailVerified;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?string
     */
    protected $salutation;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?StoreResourceIdentifierCollection
     */
    protected $stores;

    /**
     * @var ?string
     */
    protected $authenticationMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $customerNumber = null,
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
        ?string $externalId = null,
        ?CustomerGroupResourceIdentifier $customerGroup = null,
        ?CustomFieldsDraft $custom = null,
        ?string $locale = null,
        ?string $salutation = null,
        ?string $key = null,
        ?StoreResourceIdentifierCollection $stores = null,
        ?string $authenticationMode = null
    ) {
        $this->customerNumber = $customerNumber;
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
        $this->externalId = $externalId;
        $this->customerGroup = $customerGroup;
        $this->custom = $custom;
        $this->locale = $locale;
        $this->salutation = $salutation;
        $this->key = $key;
        $this->stores = $stores;
        $this->authenticationMode = $authenticationMode;
    }

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
     * <p>The customer's email address and the main identifier of uniqueness for a customer account.
     * Email addresses are either unique to the store they're specified for, <em>or</em> for the entire project, and are case insensitive.
     * For more information, see Email uniquenes.</p>
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
     * <p>Only optional with <code>authenticationMode</code> set to <code>ExternalAuth</code>.</p>
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
     * <p>Identifies a single cart that will be assigned to the new customer account.</p>
     *
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
     * <p>Identifies a single cart that will be assigned to the new customer account.</p>
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
     * <p>Identifies carts and orders belonging to an anonymous session that will be assigned to the new customer account.</p>
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
     * <p>Sets the ID of each address to be unique in the addresses list.</p>
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
     * <p>The index of the address in the addresses array.
     * The <code>defaultShippingAddressId</code> of the customer will be set to the ID of that address.</p>
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
     * <p>The indices of the shipping addresses in the addresses array.
     * The <code>shippingAddressIds</code> of the Customer will be set to the IDs of that addresses.</p>
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
     * <p>The index of the address in the addresses array.
     * The <code>defaultBillingAddressId</code> of the customer will be set to the ID of that address.</p>
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
     * <p>The indices of the billing addresses in the addresses array.
     * The <code>billingAddressIds</code> of the customer will be set to the IDs of that addresses.</p>
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
     * <p>The custom fields.</p>
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
     * <p>Must be one of the languages supported for this project</p>
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
     * <p>User-specific unique identifier for a customer.
     * Must be unique across a project.
     * The field can be reset using the Set Key UpdateAction</p>
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
     * <p>References to the stores the customer account is associated with.
     * If no stores are specified, the customer is a global customer, and can log in using the Password Flow for global Customers.
     * If one or more stores are specified, the customer can only log in using the Password Flow for Customers in a Store for those specific stores.</p>
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
     * <p>Defines whether a password is required for the Customer that is used for platform-internal authentication.</p>
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
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
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
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
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
