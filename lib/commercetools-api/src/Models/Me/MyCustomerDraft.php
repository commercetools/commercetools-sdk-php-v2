<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface MyCustomerDraft extends JsonObject
{
    
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
     * @return int|null
     */
    public function getDefaultBillingAddress();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getLocale();
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
    
    public function setDefaultShippingAddress(?int $defaultShippingAddress): void;
    
    public function setDefaultBillingAddress(?int $defaultBillingAddress): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setLocale(?string $locale): void;
}