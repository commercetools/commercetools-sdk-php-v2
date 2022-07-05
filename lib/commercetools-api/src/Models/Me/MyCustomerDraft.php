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
     * <p>The index of the address in the addresses array.
     * The <code>defaultBillingAddressId</code> of the customer will be set to the ID of that address.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress();

    /**
     * <p>The custom fields.</p>
     *

     * @return null|CustomFieldsDraft
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
