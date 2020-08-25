<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\Address;
use Commercetools\Import\Models\Common\AddressCollection;
use Commercetools\Import\Models\Common\AddressModel;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceModel;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceModel;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomModel;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CustomerImportModel extends JsonObjectModel implements CustomerImport
{
    /**
     * @var ?string
     */
    protected $key;

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
    protected $salutation;

    /**
     * @var ?string
     */
    protected $externalId;

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
     * @var ?bool
     */
    protected $isEmailVerified;

    /**
     * @var ?CustomerGroupKeyReference
     */
    protected $customerGroup;

    /**
     * @var ?AddressCollection
     */
    protected $addresses;

    /**
     * @var ?Address
     */
    protected $defaultBillingAddress;

    /**
     * @var ?Address
     */
    protected $billingAddresses;

    /**
     * @var ?Address
     */
    protected $defaultShippingAddress;

    /**
     * @var ?Address
     */
    protected $shippingAddresses;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?Custom
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $customerNumber = null,
        ?string $email = null,
        ?string $password = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $middleName = null,
        ?string $title = null,
        ?string $salutation = null,
        ?string $externalId = null,
        ?DateTimeImmutable $dateOfBirth = null,
        ?string $companyName = null,
        ?string $vatId = null,
        ?bool $isEmailVerified = null,
        ?CustomerGroupKeyReference $customerGroup = null,
        ?AddressCollection $addresses = null,
        ?Address $defaultBillingAddress = null,
        ?Address $billingAddresses = null,
        ?Address $defaultShippingAddress = null,
        ?Address $shippingAddresses = null,
        ?string $locale = null,
        ?Custom $custom = null
    ) {
        $this->key = $key;
        $this->customerNumber = $customerNumber;
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->title = $title;
        $this->salutation = $salutation;
        $this->externalId = $externalId;
        $this->dateOfBirth = $dateOfBirth;
        $this->companyName = $companyName;
        $this->vatId = $vatId;
        $this->isEmailVerified = $isEmailVerified;
        $this->customerGroup = $customerGroup;
        $this->addresses = $addresses;
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->billingAddresses = $billingAddresses;
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->shippingAddresses = $shippingAddresses;
        $this->locale = $locale;
        $this->custom = $custom;
    }

    /**
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
     * <p>Maps to <code>Customer.customerNumber</code>.</p>
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
     * <p>Maps to <code>Customer.email</code>.</p>
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
     * <p>Maps to <code>Customer.password</code>.</p>
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
     * <p>Maps to <code>Customer.firstName</code>.</p>
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
     * <p>Maps to <code>Customer.lastName</code>.</p>
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
     * <p>Maps to <code>Customer.middleName</code>.</p>
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
     * <p>Maps to <code>Customer.title</code>.</p>
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
     * <p>Maps to <code>Customer.salutation</code>.</p>
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
     * <p>Maps to <code>Customer.externalId</code>.</p>
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
     * <p>Maps to <code>Customer.dateOfBirth</code>.</p>
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
     * <p>Maps to <code>Customer.companyName</code>.</p>
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
     * <p>Maps to <code>Customer.vatId</code>.</p>
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
     * <p>Maps to <code>Customer.isEmailVerified</code>.</p>
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
     * <p>References a customer group by its key.</p>
     * <p>The customer group referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupKeyReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>Maps to <code>Customer.addresses</code>.</p>
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
     * <p>Maps to <code>Customer.defaultBillingAddress</code>.</p>
     *
     * @return null|Address
     */
    public function getDefaultBillingAddress()
    {
        if (is_null($this->defaultBillingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DEFAULT_BILLING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->defaultBillingAddress = AddressModel::of($data);
        }

        return $this->defaultBillingAddress;
    }

    /**
     * <p>Maps to <code>Customer.billingAddresses</code>.</p>
     *
     * @return null|Address
     */
    public function getBillingAddresses()
    {
        if (is_null($this->billingAddresses)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BILLING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }

            $this->billingAddresses = AddressModel::of($data);
        }

        return $this->billingAddresses;
    }

    /**
     * <p>Maps to <code>Customer.defaultShippingAddress</code>.</p>
     *
     * @return null|Address
     */
    public function getDefaultShippingAddress()
    {
        if (is_null($this->defaultShippingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DEFAULT_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->defaultShippingAddress = AddressModel::of($data);
        }

        return $this->defaultShippingAddress;
    }

    /**
     * <p>Maps to <code>Customer.shippingAddresses</code>.</p>
     *
     * @return null|Address
     */
    public function getShippingAddresses()
    {
        if (is_null($this->shippingAddresses)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }

            $this->shippingAddresses = AddressModel::of($data);
        }

        return $this->shippingAddresses;
    }

    /**
     * <p>Maps to <code>Customer.locale</code>.</p>
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
     * <p>The custom fields for this Customer.</p>
     *
     * @return null|Custom
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomModel::of($data);
        }

        return $this->custom;
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
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
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
     * @param ?bool $isEmailVerified
     */
    public function setIsEmailVerified(?bool $isEmailVerified): void
    {
        $this->isEmailVerified = $isEmailVerified;
    }

    /**
     * @param ?CustomerGroupKeyReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?AddressCollection $addresses
     */
    public function setAddresses(?AddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @param ?Address $defaultBillingAddress
     */
    public function setDefaultBillingAddress(?Address $defaultBillingAddress): void
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
    }

    /**
     * @param ?Address $billingAddresses
     */
    public function setBillingAddresses(?Address $billingAddresses): void
    {
        $this->billingAddresses = $billingAddresses;
    }

    /**
     * @param ?Address $defaultShippingAddress
     */
    public function setDefaultShippingAddress(?Address $defaultShippingAddress): void
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
    }

    /**
     * @param ?Address $shippingAddresses
     */
    public function setShippingAddresses(?Address $shippingAddresses): void
    {
        $this->shippingAddresses = $shippingAddresses;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void
    {
        $this->custom = $custom;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CustomerImport::FIELD_DATE_OF_BIRTH]) && $data[CustomerImport::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[CustomerImport::FIELD_DATE_OF_BIRTH] = $data[CustomerImport::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object) $data;
    }
}
