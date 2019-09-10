<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
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

    /**
     *
     * @return string|null
     */
    public function getCustomerNumber();
    
    /**
     *
     * @return string|null
     */
    public function getEmail();
    
    /**
     *
     * @return string|null
     */
    public function getPassword();
    
    /**
     *
     * @return string|null
     */
    public function getFirstName();
    
    /**
     *
     * @return string|null
     */
    public function getLastName();
    
    /**
     *
     * @return string|null
     */
    public function getMiddleName();
    
    /**
     *
     * @return string|null
     */
    public function getTitle();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousCartId();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getDateOfBirth();
    
    /**
     *
     * @return string|null
     */
    public function getCompanyName();
    
    /**
     *
     * @return string|null
     */
    public function getVatId();
    
    /**
     *
     * @return AddressCollection|null
     */
    public function getAddresses();
    
    /**
     *
     * @return int|null
     */
    public function getDefaultShippingAddress();
    
    /**
     *
     * @return array|null
     */
    public function getShippingAddresses();
    
    /**
     *
     * @return int|null
     */
    public function getDefaultBillingAddress();
    
    /**
     *
     * @return array|null
     */
    public function getBillingAddresses();
    
    /**
     *
     * @return bool|null
     */
    public function getIsEmailVerified();
    
    /**
     *
     * @return string|null
     */
    public function getExternalId();
    
    /**
     *
     * @return CustomerGroupResourceIdentifier|null
     */
    public function getCustomerGroup();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getLocale();
    
    /**
     *
     * @return string|null
     */
    public function getSalutation();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
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
}