<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomerDraft extends JsonObject
{
    const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    const FIELD_EMAIL = 'email';
    const FIELD_PASSWORD = 'password';
    const FIELD_FIRST_NAME = 'firstName';
    const FIELD_LAST_NAME = 'lastName';
    const FIELD_MIDDLE_NAME = 'middleName';
    const FIELD_TITLE = 'title';
    const FIELD_ANONYMOUS_CART_ID = 'anonymousCartId';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_DATE_OF_BIRTH = 'dateOfBirth';
    const FIELD_COMPANY_NAME = 'companyName';
    const FIELD_VAT_ID = 'vatId';
    const FIELD_ADDRESSES = 'addresses';
    const FIELD_DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';
    const FIELD_SHIPPING_ADDRESSES = 'shippingAddresses';
    const FIELD_DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';
    const FIELD_BILLING_ADDRESSES = 'billingAddresses';
    const FIELD_IS_EMAIL_VERIFIED = 'isEmailVerified';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_CUSTOM = 'custom';
    const FIELD_LOCALE = 'locale';
    const FIELD_SALUTATION = 'salutation';
    const FIELD_KEY = 'key';
    const FIELD_STORES = 'stores';

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
     * @return null|AddressCollection
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

    public function setCustomerNumber(?string $customerNumber): void;

    public function setEmail(?string $email): void;

    public function setPassword(?string $password): void;

    public function setFirstName(?string $firstName): void;

    public function setLastName(?string $lastName): void;

    public function setMiddleName(?string $middleName): void;

    public function setTitle(?string $title): void;

    public function setAnonymousCartId(?string $anonymousCartId): void;

    public function setAnonymousId(?string $anonymousId): void;

    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void;

    public function setCompanyName(?string $companyName): void;

    public function setVatId(?string $vatId): void;

    public function setAddresses(?AddressCollection $addresses): void;

    public function setDefaultShippingAddress(?int $defaultShippingAddress): void;

    public function setShippingAddresses(?array $shippingAddresses): void;

    public function setDefaultBillingAddress(?int $defaultBillingAddress): void;

    public function setBillingAddresses(?array $billingAddresses): void;

    public function setIsEmailVerified(?bool $isEmailVerified): void;

    public function setExternalId(?string $externalId): void;

    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setLocale(?string $locale): void;

    public function setSalutation(?string $salutation): void;

    public function setKey(?string $key): void;

    public function setStores(?StoreResourceIdentifierCollection $stores): void;
}
