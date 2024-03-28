<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CustomerModel extends JsonObjectModel implements Customer
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

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
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

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
     * @var ?AddressCollection
     */
    protected $addresses;

    /**
     *
     * @var ?string
     */
    protected $defaultShippingAddressId;

    /**
     *
     * @var ?array
     */
    protected $shippingAddressIds;

    /**
     *
     * @var ?string
     */
    protected $defaultBillingAddressId;

    /**
     *
     * @var ?array
     */
    protected $billingAddressIds;

    /**
     *
     * @var ?bool
     */
    protected $isEmailVerified;

    /**
     *
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     *
     * @var ?CustomFields
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
     * @var ?StoreKeyReferenceCollection
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
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?string $key = null,
        ?string $customerNumber = null,
        ?string $externalId = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?string $email = null,
        ?string $password = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $middleName = null,
        ?string $title = null,
        ?DateTimeImmutable $dateOfBirth = null,
        ?string $companyName = null,
        ?string $vatId = null,
        ?AddressCollection $addresses = null,
        ?string $defaultShippingAddressId = null,
        ?array $shippingAddressIds = null,
        ?string $defaultBillingAddressId = null,
        ?array $billingAddressIds = null,
        ?bool $isEmailVerified = null,
        ?CustomerGroupReference $customerGroup = null,
        ?CustomFields $custom = null,
        ?string $locale = null,
        ?string $salutation = null,
        ?StoreKeyReferenceCollection $stores = null,
        ?string $authenticationMode = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->key = $key;
        $this->customerNumber = $customerNumber;
        $this->externalId = $externalId;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->title = $title;
        $this->dateOfBirth = $dateOfBirth;
        $this->companyName = $companyName;
        $this->vatId = $vatId;
        $this->addresses = $addresses;
        $this->defaultShippingAddressId = $defaultShippingAddressId;
        $this->shippingAddressIds = $shippingAddressIds;
        $this->defaultBillingAddressId = $defaultBillingAddressId;
        $this->billingAddressIds = $billingAddressIds;
        $this->isEmailVerified = $isEmailVerified;
        $this->customerGroup = $customerGroup;
        $this->custom = $custom;
        $this->locale = $locale;
        $this->salutation = $salutation;
        $this->stores = $stores;
        $this->authenticationMode = $authenticationMode;
    }

    /**
     * <p>Unique identifier of the Customer.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the Customer.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Customer was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Customer was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>User-defined unique identifier of the Customer.</p>
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
     * <p>User-defined unique identifier of the Customer.</p>
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
     * <p>IDs and references that last modified the Customer.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the Customer.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>Email address of the Customer that is <a href="/../api/customers-overview#customer-uniqueness">unique</a> for an entire Project or to a Store the Customer is assigned to.
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
     * <p>Present only when <code>authenticationMode</code> is set to <code>Password</code>.</p>
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
     * <p>Company name of the Customer.</p>
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
     * <p>Addresses used by the Customer.</p>
     *
     *
     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        if (is_null($this->addresses)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->addresses = AddressCollection::fromArray($data);
        }

        return $this->addresses;
    }

    /**
     * <p>ID of the address in <code>addresses</code> used as the default shipping address.</p>
     *
     *
     * @return null|string
     */
    public function getDefaultShippingAddressId()
    {
        if (is_null($this->defaultShippingAddressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DEFAULT_SHIPPING_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->defaultShippingAddressId = (string) $data;
        }

        return $this->defaultShippingAddressId;
    }

    /**
     * <p>IDs of addresses in <code>addresses</code> used as shipping addresses.</p>
     *
     *
     * @return null|array
     */
    public function getShippingAddressIds()
    {
        if (is_null($this->shippingAddressIds)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESS_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->shippingAddressIds = $data;
        }

        return $this->shippingAddressIds;
    }

    /**
     * <p>ID of the address in <code>addresses</code> used as the default billing address.</p>
     *
     *
     * @return null|string
     */
    public function getDefaultBillingAddressId()
    {
        if (is_null($this->defaultBillingAddressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DEFAULT_BILLING_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->defaultBillingAddressId = (string) $data;
        }

        return $this->defaultBillingAddressId;
    }

    /**
     * <p>IDs of addresses in <code>addresses</code> used as billing addresses.</p>
     *
     *
     * @return null|array
     */
    public function getBillingAddressIds()
    {
        if (is_null($this->billingAddressIds)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_BILLING_ADDRESS_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->billingAddressIds = $data;
        }

        return $this->billingAddressIds;
    }

    /**
     * <p>Indicates whether the email address of the Customer is <a href="#email-verification-of-customer">verified</a>.</p>
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
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> to which the Customer belongs.</p>
     *
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>Custom Fields for the Customer.</p>
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
     * <p>Preferred language of the Customer.</p>
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
     * <p><a href="ctp:api:type:Store">Stores</a> to which the Customer is assigned to.</p>
     * <ul>
     * <li>If no Stores are specified, the Customer is a global customer, and can log in using the <a href="/../api/authorization#password-flow-for-global-customers">Password Flow for global Customers</a>.</li>
     * <li>If any Stores are specified, the Customer can only log in using the <a href="/../api/authorization#password-flow-for-customers-in-a-store">Password Flow for Customers in a Store</a> for those specific Stores.</li>
     * </ul>
     *
     *
     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreKeyReferenceCollection::fromArray($data);
        }

        return $this->stores;
    }

    /**
     * <p>Indicates whether the <code>password</code> is required for the Customer.</p>
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
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
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
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
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
     * @param ?AddressCollection $addresses
     */
    public function setAddresses(?AddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @param ?string $defaultShippingAddressId
     */
    public function setDefaultShippingAddressId(?string $defaultShippingAddressId): void
    {
        $this->defaultShippingAddressId = $defaultShippingAddressId;
    }

    /**
     * @param ?array $shippingAddressIds
     */
    public function setShippingAddressIds(?array $shippingAddressIds): void
    {
        $this->shippingAddressIds = $shippingAddressIds;
    }

    /**
     * @param ?string $defaultBillingAddressId
     */
    public function setDefaultBillingAddressId(?string $defaultBillingAddressId): void
    {
        $this->defaultBillingAddressId = $defaultBillingAddressId;
    }

    /**
     * @param ?array $billingAddressIds
     */
    public function setBillingAddressIds(?array $billingAddressIds): void
    {
        $this->billingAddressIds = $billingAddressIds;
    }

    /**
     * @param ?bool $isEmailVerified
     */
    public function setIsEmailVerified(?bool $isEmailVerified): void
    {
        $this->isEmailVerified = $isEmailVerified;
    }

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
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
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void
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
        if (isset($data[Customer::FIELD_CREATED_AT]) && $data[Customer::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Customer::FIELD_CREATED_AT] = $data[Customer::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Customer::FIELD_LAST_MODIFIED_AT]) && $data[Customer::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Customer::FIELD_LAST_MODIFIED_AT] = $data[Customer::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Customer::FIELD_DATE_OF_BIRTH]) && $data[Customer::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[Customer::FIELD_DATE_OF_BIRTH] = $data[Customer::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object) $data;
    }
}
