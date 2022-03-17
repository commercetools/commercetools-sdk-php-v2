<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Customer extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_FIRST_NAME = 'firstName';
    public const FIELD_LAST_NAME = 'lastName';
    public const FIELD_MIDDLE_NAME = 'middleName';
    public const FIELD_TITLE = 'title';
    public const FIELD_DATE_OF_BIRTH = 'dateOfBirth';
    public const FIELD_COMPANY_NAME = 'companyName';
    public const FIELD_VAT_ID = 'vatId';
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_DEFAULT_SHIPPING_ADDRESS_ID = 'defaultShippingAddressId';
    public const FIELD_SHIPPING_ADDRESS_IDS = 'shippingAddressIds';
    public const FIELD_DEFAULT_BILLING_ADDRESS_ID = 'defaultBillingAddressId';
    public const FIELD_BILLING_ADDRESS_IDS = 'billingAddressIds';
    public const FIELD_IS_EMAIL_VERIFIED = 'isEmailVerified';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_SALUTATION = 'salutation';
    public const FIELD_KEY = 'key';
    public const FIELD_STORES = 'stores';
    public const FIELD_AUTHENTICATION_MODE = 'authenticationMode';

    /**
     * <p>The unique ID of the customer.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the customer.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>The customer number can be used to create a more human-readable (in contrast to ID) identifier for the customer.
     * It should be unique across a project.
     * Once the field was set it cannot be changed anymore.</p>
     *
     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * <p>The customer's email address and the main identifier of uniqueness for a customer account.
     * Email addresses are either unique to the store they're specified for, <em>or</em> for the entire project.
     * For more information, see Email uniquenes.</p>
     *
     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Only present with the default <code>authenticationMode</code>, <code>Password</code>.</p>
     *
     * @return null|string
     */
    public function getPassword();

    /**
     * @return null|string
     */
    public function getFirstName();

    /**
     * @return null|string
     */
    public function getLastName();

    /**
     * @return null|string
     */
    public function getMiddleName();

    /**
     * @return null|string
     */
    public function getTitle();

    /**
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth();

    /**
     * @return null|string
     */
    public function getCompanyName();

    /**
     * @return null|string
     */
    public function getVatId();

    /**
     * <p>The addresses have unique IDs in the addresses list</p>
     *
     * @return null|AddressCollection
     */
    public function getAddresses();

    /**
     * <p>The address ID in the addresses list</p>
     *
     * @return null|string
     */
    public function getDefaultShippingAddressId();

    /**
     * <p>The IDs from the addresses list which are used as shipping addresses</p>
     *
     * @return null|array
     */
    public function getShippingAddressIds();

    /**
     * <p>The address ID in the addresses list</p>
     *
     * @return null|string
     */
    public function getDefaultBillingAddressId();

    /**
     * <p>The IDs from the addresses list which are used as billing addresses</p>
     *
     * @return null|array
     */
    public function getBillingAddressIds();

    /**
     * @return null|bool
     */
    public function getIsEmailVerified();

    /**
     * @return null|string
     */
    public function getExternalId();

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @return null|string
     */
    public function getSalutation();

    /**
     * <p>User-specific unique identifier for a customer.
     * Must be unique across a project.
     * The field can be reset using the Set Key UpdateAction</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>References to the stores the customer account is associated with.
     * If no stores are specified, the customer is a global customer, and can log in using the Password Flow for global Customers.
     * If one or more stores are specified, the customer can only log in using the Password Flow for Customers in a Store for those specific stores.</p>
     *
     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * <p>Defines whether a Customer has a password.</p>
     *
     * @return null|string
     */
    public function getAuthenticationMode();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void;

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void;

    /**
     * @param ?string $password
     */
    public function setPassword(?string $password): void;

    /**
     * @param ?string $firstName
     */
    public function setFirstName(?string $firstName): void;

    /**
     * @param ?string $lastName
     */
    public function setLastName(?string $lastName): void;

    /**
     * @param ?string $middleName
     */
    public function setMiddleName(?string $middleName): void;

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void;

    /**
     * @param ?DateTimeImmutable $dateOfBirth
     */
    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void;

    /**
     * @param ?string $companyName
     */
    public function setCompanyName(?string $companyName): void;

    /**
     * @param ?string $vatId
     */
    public function setVatId(?string $vatId): void;

    /**
     * @param ?AddressCollection $addresses
     */
    public function setAddresses(?AddressCollection $addresses): void;

    /**
     * @param ?string $defaultShippingAddressId
     */
    public function setDefaultShippingAddressId(?string $defaultShippingAddressId): void;

    /**
     * @param ?array $shippingAddressIds
     */
    public function setShippingAddressIds(?array $shippingAddressIds): void;

    /**
     * @param ?string $defaultBillingAddressId
     */
    public function setDefaultBillingAddressId(?string $defaultBillingAddressId): void;

    /**
     * @param ?array $billingAddressIds
     */
    public function setBillingAddressIds(?array $billingAddressIds): void;

    /**
     * @param ?bool $isEmailVerified
     */
    public function setIsEmailVerified(?bool $isEmailVerified): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void;
}
