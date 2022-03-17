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
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';
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
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_SALUTATION = 'salutation';
    public const FIELD_KEY = 'key';
    public const FIELD_STORES = 'stores';
    public const FIELD_AUTHENTICATION_MODE = 'authenticationMode';

    /**
     * <p>String that uniquely identifies a customer.
     * It can be used to create more human-readable (in contrast to ID) identifier for the customer.
     * It should be <strong>unique</strong> across a project.
     * Once it's set it cannot be changed.</p>
     *
     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * <p>The customer's email address and the main identifier of uniqueness for a customer account.
     * Email addresses are either unique to the store they're specified for, <em>or</em> for the entire project, and are case insensitive.
     * For more information, see Email uniquenes.</p>
     *
     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Only optional with <code>authenticationMode</code> set to <code>ExternalAuth</code>.</p>
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
     * <p>Identifies a single cart that will be assigned to the new customer account.</p>
     *
     * @return null|string
     */
    public function getAnonymousCartId();

    /**
     * <p>Identifies a single cart that will be assigned to the new customer account.</p>
     *
     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart();

    /**
     * <p>Identifies carts and orders belonging to an anonymous session that will be assigned to the new customer account.</p>
     *
     * @return null|string
     */
    public function getAnonymousId();

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
     * <p>Sets the ID of each address to be unique in the addresses list.</p>
     *
     * @return null|BaseAddressCollection
     */
    public function getAddresses();

    /**
     * <p>The index of the address in the addresses array.
     * The <code>defaultShippingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultShippingAddress();

    /**
     * <p>The indices of the shipping addresses in the addresses array.
     * The <code>shippingAddressIds</code> of the Customer will be set to the IDs of that addresses.</p>
     *
     * @return null|array
     */
    public function getShippingAddresses();

    /**
     * <p>The index of the address in the addresses array.
     * The <code>defaultBillingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultBillingAddress();

    /**
     * <p>The indices of the billing addresses in the addresses array.
     * The <code>billingAddressIds</code> of the customer will be set to the IDs of that addresses.</p>
     *
     * @return null|array
     */
    public function getBillingAddresses();

    /**
     * @return null|bool
     */
    public function getIsEmailVerified();

    /**
     * @return null|string
     */
    public function getExternalId();

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Must be one of the languages supported for this project</p>
     *
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
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    /**
     * <p>Defines whether a password is required for the Customer that is used for platform-internal authentication.</p>
     *
     * @return null|string
     */
    public function getAuthenticationMode();

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
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

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
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void;
}
