<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MyCustomerDraft extends JsonObject
{
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_FIRST_NAME = 'firstName';
    public const FIELD_LAST_NAME = 'lastName';
    public const FIELD_MIDDLE_NAME = 'middleName';
    public const FIELD_TITLE = 'title';
    public const FIELD_SALUTATION = 'salutation';
    public const FIELD_DATE_OF_BIRTH = 'dateOfBirth';
    public const FIELD_COMPANY_NAME = 'companyName';
    public const FIELD_VAT_ID = 'vatId';
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';
    public const FIELD_DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_STORES = 'stores';

    /**
     * <p>Email address of the Customer that is <a href="/../api/customers-overview#customer-uniqueness">unique</a> for an entire Project or Store the Customer is assigned to.
     * It is the mandatory unique identifier of a Customer.</p>
     *

     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Password of the Customer.</p>
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
     * <p>Salutation of the Customer, for example, 'Mr.' or 'Mrs.'.</p>
     *

     * @return null|string
     */
    public function getSalutation();

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
     * <p>Index of the address in the <code>addresses</code> array to use as the default billing address.
     * The <code>defaultBillingAddressId</code> of the Customer will be set to the <code>id</code> of that address.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress();

    /**
     * <p>Custom Fields for the Customer.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Preferred language of the Customer. Must be one of the languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Sets the <a href="ctp:api:type:Store">Stores</a> for the Customer.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

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
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void;

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
     * @param ?int $defaultBillingAddress
     */
    public function setDefaultBillingAddress(?int $defaultBillingAddress): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;
}
