<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\AddressCollection;
use Commercetools\Types\Common\Address;

interface MyCustomerDraft extends JsonObject {
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
    const FIELD_DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';
    const FIELD_DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';
    const FIELD_CUSTOM = 'custom';
    const FIELD_LOCALE = 'locale';

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
     * @return int
     */
    public function getDefaultShippingAddress();

    /**
     * @return int
     */
    public function getDefaultBillingAddress();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return string
     */
    public function getLocale();

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
     * @param int $defaultShippingAddress
     * @return $this
     */
    public function setDefaultShippingAddress(int $defaultShippingAddress);

    /**
     * @param int $defaultBillingAddress
     * @return $this
     */
    public function setDefaultBillingAddress(int $defaultBillingAddress);

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

}
