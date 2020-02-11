<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFields;
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
     * <p>The index of the address in the addresses array.
     * The <code>defaultBillingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultBillingAddress();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

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

    public function setStores(?StoreResourceIdentifierCollection $stores): void;
}
