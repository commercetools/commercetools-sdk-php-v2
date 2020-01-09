<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface Customer extends LoggedResource
{
    const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    const FIELD_EMAIL = 'email';
    const FIELD_PASSWORD = 'password';
    const FIELD_FIRST_NAME = 'firstName';
    const FIELD_LAST_NAME = 'lastName';
    const FIELD_MIDDLE_NAME = 'middleName';
    const FIELD_TITLE = 'title';
    const FIELD_DATE_OF_BIRTH = 'dateOfBirth';
    const FIELD_COMPANY_NAME = 'companyName';
    const FIELD_VAT_ID = 'vatId';
    const FIELD_ADDRESSES = 'addresses';
    const FIELD_DEFAULT_SHIPPING_ADDRESS_ID = 'defaultShippingAddressId';
    const FIELD_SHIPPING_ADDRESS_IDS = 'shippingAddressIds';
    const FIELD_DEFAULT_BILLING_ADDRESS_ID = 'defaultBillingAddressId';
    const FIELD_BILLING_ADDRESS_IDS = 'billingAddressIds';
    const FIELD_IS_EMAIL_VERIFIED = 'isEmailVerified';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_CUSTOM = 'custom';
    const FIELD_LOCALE = 'locale';
    const FIELD_SALUTATION = 'salutation';
    const FIELD_KEY = 'key';
    const FIELD_STORES = 'stores';

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
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
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

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setCustomerNumber(?string $customerNumber): void;

    public function setEmail(?string $email): void;

    public function setPassword(?string $password): void;

    public function setFirstName(?string $firstName): void;

    public function setLastName(?string $lastName): void;

    public function setMiddleName(?string $middleName): void;

    public function setTitle(?string $title): void;

    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void;

    public function setCompanyName(?string $companyName): void;

    public function setVatId(?string $vatId): void;

    public function setAddresses(?AddressCollection $addresses): void;

    public function setDefaultShippingAddressId(?string $defaultShippingAddressId): void;

    public function setShippingAddressIds(?array $shippingAddressIds): void;

    public function setDefaultBillingAddressId(?string $defaultBillingAddressId): void;

    public function setBillingAddressIds(?array $billingAddressIds): void;

    public function setIsEmailVerified(?bool $isEmailVerified): void;

    public function setExternalId(?string $externalId): void;

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    public function setCustom(?CustomFields $custom): void;

    public function setLocale(?string $locale): void;

    public function setSalutation(?string $salutation): void;

    public function setKey(?string $key): void;

    public function setStores(?StoreKeyReferenceCollection $stores): void;
}
