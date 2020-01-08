<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<MyCustomer>
 */
final class MyCustomerBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var LastModifiedBy|?LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var CreatedBy|?CreatedByBuilder
     */
    private $createdBy;

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
     * @var ?AddressCollection
     */
    private $addresses;

    /**
     * @var ?string
     */
    private $defaultShippingAddressId;

    /**
     * @var ?array
     */
    private $shippingAddressIds;

    /**
     * @var ?string
     */
    private $defaultBillingAddressId;

    /**
     * @var ?array
     */
    private $billingAddressIds;

    /**
     * @var ?bool
     */
    private $isEmailVerified;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var CustomerGroupReference|?CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var CustomFields|?CustomFieldsBuilder
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
     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * @return null|string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
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
     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @return null|string
     */
    public function getDefaultShippingAddressId()
    {
        return $this->defaultShippingAddressId;
    }

    /**
     * @return null|array
     */
    public function getShippingAddressIds()
    {
        return $this->shippingAddressIds;
    }

    /**
     * @return null|string
     */
    public function getDefaultBillingAddressId()
    {
        return $this->defaultBillingAddressId;
    }

    /**
     * @return null|array
     */
    public function getBillingAddressIds()
    {
        return $this->billingAddressIds;
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
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
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
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMiddleName(?string $middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddresses(?AddressCollection $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDefaultShippingAddressId(?string $defaultShippingAddressId)
    {
        $this->defaultShippingAddressId = $defaultShippingAddressId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingAddressIds(?array $shippingAddressIds)
    {
        $this->shippingAddressIds = $shippingAddressIds;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDefaultBillingAddressId(?string $defaultBillingAddressId)
    {
        $this->defaultBillingAddressId = $defaultBillingAddressId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withBillingAddressIds(?array $billingAddressIds)
    {
        $this->billingAddressIds = $billingAddressIds;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsEmailVerified(?bool $isEmailVerified)
    {
        $this->isEmailVerified = $isEmailVerified;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStores(?StoreKeyReferenceCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): MyCustomer
    {
        return new MyCustomerModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            $this->customerNumber,
            $this->email,
            $this->password,
            $this->firstName,
            $this->lastName,
            $this->middleName,
            $this->title,
            $this->dateOfBirth,
            $this->companyName,
            $this->vatId,
            $this->addresses,
            $this->defaultShippingAddressId,
            $this->shippingAddressIds,
            $this->defaultBillingAddressId,
            $this->billingAddressIds,
            $this->isEmailVerified,
            $this->externalId,
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->locale,
            $this->salutation,
            $this->key,
            $this->stores
        );
    }

    public static function of(): MyCustomerBuilder
    {
        return new self();
    }
}
