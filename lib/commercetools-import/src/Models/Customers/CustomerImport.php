<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\StoreKeyReferenceCollection;
use Commercetools\Import\Models\Customfields\Custom;
use DateTimeImmutable;

interface CustomerImport extends ImportResource
{
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_STORES = 'stores';
    public const FIELD_FIRST_NAME = 'firstName';
    public const FIELD_LAST_NAME = 'lastName';
    public const FIELD_MIDDLE_NAME = 'middleName';
    public const FIELD_TITLE = 'title';
    public const FIELD_SALUTATION = 'salutation';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_DATE_OF_BIRTH = 'dateOfBirth';
    public const FIELD_COMPANY_NAME = 'companyName';
    public const FIELD_VAT_ID = 'vatId';
    public const FIELD_IS_EMAIL_VERIFIED = 'isEmailVerified';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';
    public const FIELD_BILLING_ADDRESSES = 'billingAddresses';
    public const FIELD_DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';
    public const FIELD_SHIPPING_ADDRESSES = 'shippingAddresses';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Maps to <code>Customer.customerNumber</code>.</p>
     *
     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * <p>Maps to <code>Customer.email</code>.</p>
     *
     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Maps to <code>Customer.password</code>.</p>
     *
     * @return null|string
     */
    public function getPassword();

    /**
     * <p>The References to the Stores with which the Customer is associated. If referenced Stores do not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Stores are created.</p>
     *
     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * <p>Maps to <code>Customer.firstName</code>.</p>
     *
     * @return null|string
     */
    public function getFirstName();

    /**
     * <p>Maps to <code>Customer.lastName</code>.</p>
     *
     * @return null|string
     */
    public function getLastName();

    /**
     * <p>Maps to <code>Customer.middleName</code>.</p>
     *
     * @return null|string
     */
    public function getMiddleName();

    /**
     * <p>Maps to <code>Customer.title</code>.</p>
     *
     * @return null|string
     */
    public function getTitle();

    /**
     * <p>Maps to <code>Customer.salutation</code>.</p>
     *
     * @return null|string
     */
    public function getSalutation();

    /**
     * <p>Maps to <code>Customer.externalId</code>.</p>
     *
     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>Maps to <code>Customer.dateOfBirth</code>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth();

    /**
     * <p>Maps to <code>Customer.companyName</code>.</p>
     *
     * @return null|string
     */
    public function getCompanyName();

    /**
     * <p>Maps to <code>Customer.vatId</code>.</p>
     *
     * @return null|string
     */
    public function getVatId();

    /**
     * <p>Maps to <code>Customer.isEmailVerified</code>.</p>
     *
     * @return null|bool
     */
    public function getIsEmailVerified();

    /**
     * <p>The Reference to the <a href="/../api/projects/customerGroups#customergroup">CustomerGroup</a> with which the Customer is associated.
     * If referenced CustomerGroup does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary CustomerGroup is created.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup();

    /**
     * <p>Maps to <code>Customer.addresses</code>.</p>
     *
     * @return null|CustomerAddressCollection
     */
    public function getAddresses();

    /**
     * <p>The index of the address in the addresses array. The <code>defaultBillingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultBillingAddress();

    /**
     * <p>The indices of the billing addresses in the addresses array. The <code>billingAddressIds</code> of the customer will be set to the IDs of that addresses.</p>
     *
     * @return null|array
     */
    public function getBillingAddresses();

    /**
     * <p>The index of the address in the addresses array. The <code>defaultShippingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultShippingAddress();

    /**
     * <p>The indices of the shipping addresses in the addresses array. The <code>shippingAddressIds</code> of the customer will be set to the IDs of that addresses.</p>
     *
     * @return null|array
     */
    public function getShippingAddresses();

    /**
     * <p>Maps to <code>Customer.locale</code>.</p>
     *
     * @return null|string
     */
    public function getLocale();

    /**
     * <p>The custom fields for this Customer.</p>
     *
     * @return null|Custom
     */
    public function getCustom();

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
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;

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
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

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
     * @param ?bool $isEmailVerified
     */
    public function setIsEmailVerified(?bool $isEmailVerified): void;

    /**
     * @param ?CustomerGroupKeyReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void;

    /**
     * @param ?CustomerAddressCollection $addresses
     */
    public function setAddresses(?CustomerAddressCollection $addresses): void;

    /**
     * @param ?int $defaultBillingAddress
     */
    public function setDefaultBillingAddress(?int $defaultBillingAddress): void;

    /**
     * @param ?array $billingAddresses
     */
    public function setBillingAddresses(?array $billingAddresses): void;

    /**
     * @param ?int $defaultShippingAddress
     */
    public function setDefaultShippingAddress(?int $defaultShippingAddress): void;

    /**
     * @param ?array $shippingAddresses
     */
    public function setShippingAddresses(?array $shippingAddresses): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
