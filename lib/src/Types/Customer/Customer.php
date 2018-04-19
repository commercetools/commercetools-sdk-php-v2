<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Builder\CustomerUpdateBuilder;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\AddressCollection;
use Commercetools\Types\Common\Address;
use Commercetools\Types\Common\Resource;

interface Customer extends Resource
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
     * @return string
     */
    public function getDefaultShippingAddressId();

    /**
     * @return array
     */
    public function getShippingAddressIds();

    /**
     * @return string
     */
    public function getDefaultBillingAddressId();

    /**
     * @return array
     */
    public function getBillingAddressIds();

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
     * @return CustomFields
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
     * @param string $defaultShippingAddressId
     * @return $this
     */
    public function setDefaultShippingAddressId(string $defaultShippingAddressId);

    /**
     * @param array $shippingAddressIds
     * @return $this
     */
    public function setShippingAddressIds($shippingAddressIds);

    /**
     * @param string $defaultBillingAddressId
     * @return $this
     */
    public function setDefaultBillingAddressId(string $defaultBillingAddressId);

    /**
     * @param array $billingAddressIds
     * @return $this
     */
    public function setBillingAddressIds($billingAddressIds);

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
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

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

    /**
     * @return CustomerUpdateBuilder
     */
    public function update();
}
