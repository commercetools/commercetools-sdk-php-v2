<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObject;

use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\AddressCollection;
use Commercetools\Types\Common\Address;

interface CustomerDraft extends JsonObject {
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
     * @return string
     */
    public function getCustomerNumber();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @return string
     */
    public function getMiddleName();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getAnonymousCartId();

    /**
     * @return string
     */
    public function getAnonymousId();

    /**
     * @return \DateTimeImmutable
     */
    public function getDateOfBirth();

    /**
     * @return string
     */
    public function getCompanyName();

    /**
     * @return string
     */
    public function getVatId();

    /**
     * @return AddressCollection
     */
    public function getAddresses();

    /**
     * @return int
     */
    public function getDefaultShippingAddress();

    /**
     * @return array
     */
    public function getShippingAddresses();

    /**
     * @return int
     */
    public function getDefaultBillingAddress();

    /**
     * @return array
     */
    public function getBillingAddresses();

    /**
     * @return mixed
     */
    public function getIsEmailVerified();

    /**
     * @return string
     */
    public function getExternalId();

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return string
     */
    public function getLocale();

    /**
     * @return string
     */
    public function getSalutation();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param string $customerNumber
     * @return $this
     */
    public function setCustomerNumber(string $customerNumber);

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email);

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password);

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName(string $firstName);

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName(string $lastName);

    /**
     * @param string $middleName
     * @return $this
     */
    public function setMiddleName(string $middleName);

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * @param string $anonymousCartId
     * @return $this
     */
    public function setAnonymousCartId(string $anonymousCartId);

    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId);

    /**
     * @param \DateTimeImmutable $dateOfBirth
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth);

    /**
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName(string $companyName);

    /**
     * @param string $vatId
     * @return $this
     */
    public function setVatId(string $vatId);

    /**
     * @param AddressCollection $addresses
     * @return $this
     */
    public function setAddresses(AddressCollection $addresses);

    /**
     * @param int $defaultShippingAddress
     * @return $this
     */
    public function setDefaultShippingAddress(int $defaultShippingAddress);

    /**
     * @param array $shippingAddresses
     * @return $this
     */
    public function setShippingAddresses($shippingAddresses);

    /**
     * @param int $defaultBillingAddress
     * @return $this
     */
    public function setDefaultBillingAddress(int $defaultBillingAddress);

    /**
     * @param array $billingAddresses
     * @return $this
     */
    public function setBillingAddresses($billingAddresses);

    /**
     * @param mixed $isEmailVerified
     * @return $this
     */
    public function setIsEmailVerified($isEmailVerified);

    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId);

    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup);

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale);

    /**
     * @param string $salutation
     * @return $this
     */
    public function setSalutation(string $salutation);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

}
