<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class CustomerDraftModel extends JsonObjectModel implements CustomerDraft
{
    
    public function __construct(
        string $anonymousId = null,
        string $lastName = null,
        AddressCollection $addresses = null,
        int $defaultShippingAddress = null,
        CustomerGroupResourceIdentifier $customerGroup = null,
        CustomFieldsDraft $custom = null,
        string $companyName = null,
        string $vatId = null,
        string $externalId = null,
        array $billingAddresses = null,
        DateTimeImmutable $dateOfBirth = null,
        string $locale = null,
        string $title = null,
        string $customerNumber = null,
        bool $isEmailVerified = null,
        string $firstName = null,
        string $password = null,
        string $middleName = null,
        string $salutation = null,
        string $anonymousCartId = null,
        string $key = null,
        int $defaultBillingAddress = null,
        string $email = null,
        array $shippingAddresses = null
    ) {
        $this->anonymousId = $anonymousId;
        $this->lastName = $lastName;
        $this->addresses = $addresses;
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->customerGroup = $customerGroup;
        $this->custom = $custom;
        $this->companyName = $companyName;
        $this->vatId = $vatId;
        $this->externalId = $externalId;
        $this->billingAddresses = $billingAddresses;
        $this->dateOfBirth = $dateOfBirth;
        $this->locale = $locale;
        $this->title = $title;
        $this->customerNumber = $customerNumber;
        $this->isEmailVerified = $isEmailVerified;
        $this->firstName = $firstName;
        $this->password = $password;
        $this->middleName = $middleName;
        $this->salutation = $salutation;
        $this->anonymousCartId = $anonymousCartId;
        $this->key = $key;
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->email = $email;
        $this->shippingAddresses = $shippingAddresses;
        
    }

    /**
     * @var ?string
     */
    protected $anonymousId;
    
    /**
     * @var ?string
     */
    protected $lastName;
    
    /**
     * @var ?AddressCollection
     */
    protected $addresses;
    
    /**
     * @var ?int
     */
    protected $defaultShippingAddress;
    
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
    protected $companyName;
    
    /**
     * @var ?string
     */
    protected $vatId;
    
    /**
     * @var ?string
     */
    protected $externalId;
    
    /**
     * @var ?array
     */
    protected $billingAddresses;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;
    
    /**
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?string
     */
    protected $title;
    
    /**
     * @var ?string
     */
    protected $customerNumber;
    
    /**
     * @var ?bool
     */
    protected $isEmailVerified;
    
    /**
     * @var ?string
     */
    protected $firstName;
    
    /**
     * @var ?string
     */
    protected $password;
    
    /**
     * @var ?string
     */
    protected $middleName;
    
    /**
     * @var ?string
     */
    protected $salutation;
    
    /**
     * @var ?string
     */
    protected $anonymousCartId;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?int
     */
    protected $defaultBillingAddress;
    
    /**
     * @var ?string
     */
    protected $email;
    
    /**
     * @var ?array
     */
    protected $shippingAddresses;

    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       if (is_null($this->anonymousId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_ANONYMOUS_ID);
           if (is_null($data)) {
               return null;
           }
           $this->anonymousId = (string)$data;
       }
       return $this->anonymousId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLastName()
    {
       if (is_null($this->lastName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_LAST_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->lastName = (string)$data;
       }
       return $this->lastName;
    }
    
    /**
     *
     * @return AddressCollection|null
     */
    final public function getAddresses()
    {
       if (is_null($this->addresses)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CustomerDraft::FIELD_ADDRESSES);
           if (is_null($data)) {
               return null;
           }
           $this->addresses = AddressCollection::fromArray($data);
       }
       return $this->addresses;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDefaultShippingAddress()
    {
       if (is_null($this->defaultShippingAddress)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomerDraft::FIELD_DEFAULT_SHIPPING_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           $this->defaultShippingAddress = (int)$data;
       }
       return $this->defaultShippingAddress;
    }
    
    /**
     *
     * @return CustomerGroupResourceIdentifier|null
     */
    final public function getCustomerGroup()
    {
       if (is_null($this->customerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomerDraft::FIELD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->customerGroup = CustomerGroupResourceIdentifierModel::of($data);
       }
       return $this->customerGroup;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomerDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCompanyName()
    {
       if (is_null($this->companyName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_COMPANY_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->companyName = (string)$data;
       }
       return $this->companyName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getVatId()
    {
       if (is_null($this->vatId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_VAT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->vatId = (string)$data;
       }
       return $this->vatId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       if (is_null($this->externalId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_EXTERNAL_ID);
           if (is_null($data)) {
               return null;
           }
           $this->externalId = (string)$data;
       }
       return $this->externalId;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getBillingAddresses()
    {
       if (is_null($this->billingAddresses)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(CustomerDraft::FIELD_BILLING_ADDRESSES);
           if (is_null($data)) {
               return null;
           }
           $this->billingAddresses = $data;
       }
       return $this->billingAddresses;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getDateOfBirth()
    {
       if (is_null($this->dateOfBirth)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_DATE_OF_BIRTH);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->dateOfBirth = $data;
       }
       return $this->dateOfBirth;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       if (is_null($this->locale)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_LOCALE);
           if (is_null($data)) {
               return null;
           }
           $this->locale = (string)$data;
       }
       return $this->locale;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTitle()
    {
       if (is_null($this->title)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_TITLE);
           if (is_null($data)) {
               return null;
           }
           $this->title = (string)$data;
       }
       return $this->title;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerNumber()
    {
       if (is_null($this->customerNumber)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_CUSTOMER_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->customerNumber = (string)$data;
       }
       return $this->customerNumber;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsEmailVerified()
    {
       if (is_null($this->isEmailVerified)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(CustomerDraft::FIELD_IS_EMAIL_VERIFIED);
           if (is_null($data)) {
               return null;
           }
           $this->isEmailVerified = (bool)$data;
       }
       return $this->isEmailVerified;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFirstName()
    {
       if (is_null($this->firstName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_FIRST_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->firstName = (string)$data;
       }
       return $this->firstName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPassword()
    {
       if (is_null($this->password)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_PASSWORD);
           if (is_null($data)) {
               return null;
           }
           $this->password = (string)$data;
       }
       return $this->password;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMiddleName()
    {
       if (is_null($this->middleName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_MIDDLE_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->middleName = (string)$data;
       }
       return $this->middleName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSalutation()
    {
       if (is_null($this->salutation)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_SALUTATION);
           if (is_null($data)) {
               return null;
           }
           $this->salutation = (string)$data;
       }
       return $this->salutation;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousCartId()
    {
       if (is_null($this->anonymousCartId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_ANONYMOUS_CART_ID);
           if (is_null($data)) {
               return null;
           }
           $this->anonymousCartId = (string)$data;
       }
       return $this->anonymousCartId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDefaultBillingAddress()
    {
       if (is_null($this->defaultBillingAddress)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomerDraft::FIELD_DEFAULT_BILLING_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           $this->defaultBillingAddress = (int)$data;
       }
       return $this->defaultBillingAddress;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getEmail()
    {
       if (is_null($this->email)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDraft::FIELD_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->email = (string)$data;
       }
       return $this->email;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getShippingAddresses()
    {
       if (is_null($this->shippingAddresses)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(CustomerDraft::FIELD_SHIPPING_ADDRESSES);
           if (is_null($data)) {
               return null;
           }
           $this->shippingAddresses = $data;
       }
       return $this->shippingAddresses;
    }
    final public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
    
    final public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }
    
    final public function setAddresses(?AddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }
    
    final public function setDefaultShippingAddress(?int $defaultShippingAddress): void
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
    }
    
    final public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }
    
    final public function setVatId(?string $vatId): void
    {
        $this->vatId = $vatId;
    }
    
    final public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
    
    final public function setBillingAddresses(?array $billingAddresses): void
    {
        $this->billingAddresses = $billingAddresses;
    }
    
    final public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }
    
    final public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }
    
    final public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    
    final public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }
    
    final public function setIsEmailVerified(?bool $isEmailVerified): void
    {
        $this->isEmailVerified = $isEmailVerified;
    }
    
    final public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }
    
    final public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
    
    final public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }
    
    final public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }
    
    final public function setAnonymousCartId(?string $anonymousCartId): void
    {
        $this->anonymousCartId = $anonymousCartId;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setDefaultBillingAddress(?int $defaultBillingAddress): void
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
    }
    
    final public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    
    final public function setShippingAddresses(?array $shippingAddresses): void
    {
        $this->shippingAddresses = $shippingAddresses;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[CustomerDraft::FIELD_DATE_OF_BIRTH]) && $data[CustomerDraft::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
           $data[CustomerDraft::FIELD_DATE_OF_BIRTH] = $data[CustomerDraft::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object)$data;
    }
    
}