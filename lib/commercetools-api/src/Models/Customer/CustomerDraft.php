<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomerDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_FIRST_NAME = 'firstName';
    public const FIELD_LAST_NAME = 'lastName';
    public const FIELD_MIDDLE_NAME = 'middleName';
    public const FIELD_TITLE = 'title';
    public const FIELD_ANONYMOUS_CART_ID = 'anonymousCartId';
    public const FIELD_ANONYMOUS_CART = 'anonymousCart';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_DATE_OF_BIRTH = 'dateOfBirth';
    public const FIELD_COMPANY_NAME = 'companyName';
    public const FIELD_VAT_ID = 'vatId';
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';
    public const FIELD_SHIPPING_ADDRESSES = 'shippingAddresses';
    public const FIELD_DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';
    public const FIELD_BILLING_ADDRESSES = 'billingAddresses';
    public const FIELD_IS_EMAIL_VERIFIED = 'isEmailVerified';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_SALUTATION = 'salutation';
    public const FIELD_STORES = 'stores';
    public const FIELD_AUTHENTICATION_MODE = 'authenticationMode';

    /**
     * <p>User-defined unique identifier for the Customer.
     * The <code>key</code> field is preferred over <code>customerNumber</code> as it is mutable and provides more flexibility.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>User-defined unique identifier for a Customer.
     * Once set, it cannot be changed.</p>
     * <p>Can be used to refer to a Customer in a human-readable way (in emails, invoices, and other correspondence).</p>
     *

     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * <p>Optional identifier for use in external systems like Customer Relationship Management (CRM) or Enterprise Resource Planning (ERP).</p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>Email address of the Customer that must be <a href="/../api/customers-overview#customer-uniqueness">unique</a> for an entire Project or to a Store the Customer is assigned to.
     * It is the mandatory unique identifier of a Customer.</p>
     *

     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Required when <code>authenticationMode</code> is set to <code>Password</code>.
     * Provide the Customer's password in plain text. The API stores passwords in an encrypted format.</p>
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
     * <p>Deprecated since an anonymous <a href="ctp:api:type:Cart">Cart</a> can be identified by its <code>id</code> or external <code>key</code>.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getAnonymousCartId();

    /**
     * <p>Identifies a <a href="ctp:api:type:Cart">Cart</a> that will be assigned to the new Customer.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart();

    /**
     * <p>Identifies Carts and Orders belonging to an anonymous session that will be assigned to the new Customer.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>Date of birth of the Customer.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth();

    /**
     * <p>Company name of the Customer. When representing a company as a Customer, <a href="ctp:api:type:BusinessUnit">Business Units</a> provide extended funtionality.</p>
     *

     * @return null|string
     */
    public function getCompanyName();

    /**
     * <p>Unique VAT ID of the Customer.</p>
     *

     * @return null|string
     */
    public function getVatId();

    /**
     * <p>Addresses of the Customer.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getAddresses();

    /**
     * <p>Index of the address in the <code>addresses</code> array to use as the default shipping address.
     * The <code>defaultShippingAddressId</code> of the Customer will be set to the <code>id</code> of that address.</p>
     *

     * @return null|int
     */
    public function getDefaultShippingAddress();

    /**
     * <p>Indices of the shipping addresses in the <code>addresses</code> array.
     * The <code>shippingAddressIds</code> of the Customer will be set to the IDs of these addresses.</p>
     *

     * @return null|array
     */
    public function getShippingAddresses();

    /**
     * <p>Index of the address in the <code>addresses</code> array to use as the default billing address.
     * The <code>defaultBillingAddressId</code> of the Customer will be set to the <code>id</code> of that address.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress();

    /**
     * <p>Indices of the billing addresses in the <code>addresses</code> array.
     * The <code>billingAddressIds</code> of the Customer will be set to the IDs of these addresses.</p>
     *

     * @return null|array
     */
    public function getBillingAddresses();

    /**
     * <p>Set to <code>true</code> if the email address of the Customer has been verified already.
     * The intended use is to leave this field unset upon sign-up of the Customer and initiate the <a href="#email-verification-of-customer">email verification</a> afterwards.</p>
     *

     * @return null|bool
     */
    public function getIsEmailVerified();

    /**
     * <p>Sets the <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for the Customer.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p>Custom Fields for the Customer.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Preferred language of the Customer.
     * Must be one of the languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
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
     * <p>Sets the <a href="ctp:api:type:Store">Stores</a> for the Customer.</p>
     * <ul>
     * <li>If no Stores are specified, the Customer is a global customer, and can log in using the <a href="/../api/authorization#password-flow-for-global-customers">Password Flow for global Customers</a>.</li>
     * <li>If any Stores are specified, the Customer can only log in using the <a href="/../api/authorization#password-flow-for-customers-in-a-store">Password Flow for Customers in a Store</a> for those specific Stores.</li>
     * </ul>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    /**
     * <ul>
     * <li>Set to <code>Password</code> to make the <code>password</code> field required for the Customer.</li>
     * <li>Set to <code>ExternalAuth</code> when the password is not required for the Customer.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getAuthenticationMode();

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
     * @param ?string $anonymousCartId
     */
    public function setAnonymousCartId(?string $anonymousCartId): void;

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     */
    public function setAnonymousCart(?CartResourceIdentifier $anonymousCart): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

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
     * @param ?BaseAddressCollection $addresses
     */
    public function setAddresses(?BaseAddressCollection $addresses): void;

    /**
     * @param ?int $defaultShippingAddress
     */
    public function setDefaultShippingAddress(?int $defaultShippingAddress): void;

    /**
     * @param ?array $shippingAddresses
     */
    public function setShippingAddresses(?array $shippingAddresses): void;

    /**
     * @param ?int $defaultBillingAddress
     */
    public function setDefaultBillingAddress(?int $defaultBillingAddress): void;

    /**
     * @param ?array $billingAddresses
     */
    public function setBillingAddresses(?array $billingAddresses): void;

    /**
     * @param ?bool $isEmailVerified
     */
    public function setIsEmailVerified(?bool $isEmailVerified): void;

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void;

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void;
}
