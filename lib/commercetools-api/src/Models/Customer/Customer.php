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
    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
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
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_SALUTATION = 'salutation';
    public const FIELD_STORES = 'stores';
    public const FIELD_AUTHENTICATION_MODE = 'authenticationMode';

    /**
     * <p>Unique identifier of the Customer.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Customer.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the Customer.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>User-defined unique identifier of the Customer.</p>
     * <p>Can be used to refer to a Customer in a human-readable way (in emails, invoices, and other correspondence).</p>
     *

     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * <p>Optional identifier for use in external systems like customer relationship management (CRM) or enterprise resource planning (ERP).</p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>Date and time (UTC) the Customer was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Customer was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Email address of the Customer that is <a href="/../api/customers-overview#customer-uniqueness">unique</a> for an entire Project or to a Store the Customer is assigned to.
     * It is the mandatory unique identifier of a Customer.</p>
     *

     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Present only when <code>authenticationMode</code> is set to <code>Password</code>.</p>
     *

     * @return null|string
     */
    public function getPassword();

    /**
     * <p>Given name (first name) of the Customer.</p>
     *

     * @return null|string
     */
    public function getFirstName();

    /**
     * <p>Family name (last name) of the Customer.</p>
     *

     * @return null|string
     */
    public function getLastName();

    /**
     * <p>Middle name of the Customer.</p>
     *

     * @return null|string
     */
    public function getMiddleName();

    /**
     * <p>Title of the Customer, for example, 'Dr.'.</p>
     *

     * @return null|string
     */
    public function getTitle();

    /**
     * <p>Date of birth of the Customer.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth();

    /**
     * <p>Company name of the Customer.</p>
     *

     * @return null|string
     */
    public function getCompanyName();

    /**
     * <p>Individual VAT ID of the Customer.</p>
     *

     * @return null|string
     */
    public function getVatId();

    /**
     * <p>Addresses used by the Customer.</p>
     *

     * @return null|AddressCollection
     */
    public function getAddresses();

    /**
     * <p>ID of the address in <code>addresses</code> used as the default shipping address.</p>
     *

     * @return null|string
     */
    public function getDefaultShippingAddressId();

    /**
     * <p>IDs of addresses in <code>addresses</code> used as shipping addresses.</p>
     *

     * @return null|array
     */
    public function getShippingAddressIds();

    /**
     * <p>ID of the address in <code>addresses</code> used as the default billing address.</p>
     *

     * @return null|string
     */
    public function getDefaultBillingAddressId();

    /**
     * <p>IDs of addresses in <code>addresses</code> used as billing addresses.</p>
     *

     * @return null|array
     */
    public function getBillingAddressIds();

    /**
     * <p>Indicates whether the email address of the Customer is <a href="#email-verification-of-customer">verified</a>.</p>
     *

     * @return null|bool
     */
    public function getIsEmailVerified();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> to which the Customer belongs.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>Custom Fields for the Customer.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Preferred language of the Customer.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Salutation of the Customer, for example, 'Mr.' or 'Mrs.'.</p>
     *

     * @return null|string
     */
    public function getSalutation();

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> to which the Customer is assigned to.</p>
     * <ul>
     * <li>If no Stores are specified, the Customer is a global customer, and can log in using the <a href="/../api/authorization#password-flow-for-global-customers">Password Flow for global Customers</a>.</li>
     * <li>If any Stores are specified, the Customer can only log in using the <a href="/../api/authorization#password-flow-for-customers-in-a-store">Password Flow for Customers in a Store</a> for those specific Stores.</li>
     * </ul>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * <p>Indicates whether the <code>password</code> is required for the Customer.</p>
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
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

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
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void;
}
