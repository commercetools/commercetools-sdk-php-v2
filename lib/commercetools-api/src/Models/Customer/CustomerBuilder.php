<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<Customer>
 */
final class CustomerBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?CreatedByBuilder|CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedByBuilder|LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?string
     */
    protected $lastName;
    
    /**
     * @var ?AddressCollection
     */
    protected $addresses;
    
    /**
     * @var ?CustomerGroupReferenceBuilder|CustomerGroupReference
     */
    protected $customerGroup;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
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
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;
    
    /**
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?array
     */
    protected $billingAddressIds;
    
    /**
     * @var ?string
     */
    protected $defaultShippingAddressId;
    
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
    protected $defaultBillingAddressId;
    
    /**
     * @var ?array
     */
    protected $shippingAddressIds;
    
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
    protected $key;
    
    /**
     * @var ?string
     */
    protected $email;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    
    /**
     *
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       return ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy);
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       return ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLastName()
    {
       return $this->lastName;
    }
    
    /**
     *
     * @return AddressCollection|null
     */
    final public function getAddresses()
    {
       return $this->addresses;
    }
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    final public function getCustomerGroup()
    {
       return ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup);
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCompanyName()
    {
       return $this->companyName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getVatId()
    {
       return $this->vatId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       return $this->externalId;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getDateOfBirth()
    {
       return $this->dateOfBirth;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       return $this->locale;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getBillingAddressIds()
    {
       return $this->billingAddressIds;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDefaultShippingAddressId()
    {
       return $this->defaultShippingAddressId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTitle()
    {
       return $this->title;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerNumber()
    {
       return $this->customerNumber;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsEmailVerified()
    {
       return $this->isEmailVerified;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDefaultBillingAddressId()
    {
       return $this->defaultBillingAddressId;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getShippingAddressIds()
    {
       return $this->shippingAddressIds;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFirstName()
    {
       return $this->firstName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPassword()
    {
       return $this->password;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMiddleName()
    {
       return $this->middleName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSalutation()
    {
       return $this->salutation;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getEmail()
    {
       return $this->email;
    }
    /**
     * @return $this
     */
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAddresses(?AddressCollection $addresses)
    {
        $this->addresses = $addresses;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLocale(?string $locale)
    {
        $this->locale = $locale;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withBillingAddressIds(?array $billingAddressIds)
    {
        $this->billingAddressIds = $billingAddressIds;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDefaultShippingAddressId(?string $defaultShippingAddressId)
    {
        $this->defaultShippingAddressId = $defaultShippingAddressId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTitle(?string $title)
    {
        $this->title = $title;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIsEmailVerified(?bool $isEmailVerified)
    {
        $this->isEmailVerified = $isEmailVerified;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDefaultBillingAddressId(?string $defaultBillingAddressId)
    {
        $this->defaultBillingAddressId = $defaultBillingAddressId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingAddressIds(?array $shippingAddressIds)
    {
        $this->shippingAddressIds = $shippingAddressIds;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPassword(?string $password)
    {
        $this->password = $password;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMiddleName(?string $middleName)
    {
        $this->middleName = $middleName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withEmail(?string $email)
    {
        $this->email = $email;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    public function build(): Customer {
        return new CustomerModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->id,
            $this->version,
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            $this->lastName,
            $this->addresses,
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->companyName,
            $this->vatId,
            $this->externalId,
            $this->dateOfBirth,
            $this->locale,
            $this->billingAddressIds,
            $this->defaultShippingAddressId,
            $this->title,
            $this->customerNumber,
            $this->isEmailVerified,
            $this->defaultBillingAddressId,
            $this->shippingAddressIds,
            $this->firstName,
            $this->password,
            $this->middleName,
            $this->salutation,
            $this->key,
            $this->email
        );
    }
    
    public static function of(): CustomerBuilder
    {
        return new self();
    }
}