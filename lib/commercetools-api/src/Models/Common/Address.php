<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Address extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_KEY = 'key';
    public const FIELD_TITLE = 'title';
    public const FIELD_SALUTATION = 'salutation';
    public const FIELD_FIRST_NAME = 'firstName';
    public const FIELD_LAST_NAME = 'lastName';
    public const FIELD_STREET_NAME = 'streetName';
    public const FIELD_STREET_NUMBER = 'streetNumber';
    public const FIELD_ADDITIONAL_STREET_INFO = 'additionalStreetInfo';
    public const FIELD_POSTAL_CODE = 'postalCode';
    public const FIELD_CITY = 'city';
    public const FIELD_REGION = 'region';
    public const FIELD_STATE = 'state';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_COMPANY = 'company';
    public const FIELD_DEPARTMENT = 'department';
    public const FIELD_BUILDING = 'building';
    public const FIELD_APARTMENT = 'apartment';
    public const FIELD_P_O_BOX = 'pOBox';
    public const FIELD_PHONE = 'phone';
    public const FIELD_MOBILE = 'mobile';
    public const FIELD_EMAIL = 'email';
    public const FIELD_FAX = 'fax';
    public const FIELD_ADDITIONAL_ADDRESS_INFO = 'additionalAddressInfo';
    public const FIELD_EXTERNAL_ID = 'externalId';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getTitle();

    /**
     * @return null|string
     */
    public function getSalutation();

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
    public function getStreetName();

    /**
     * @return null|string
     */
    public function getStreetNumber();

    /**
     * @return null|string
     */
    public function getAdditionalStreetInfo();

    /**
     * @return null|string
     */
    public function getPostalCode();

    /**
     * @return null|string
     */
    public function getCity();

    /**
     * @return null|string
     */
    public function getRegion();

    /**
     * @return null|string
     */
    public function getState();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * @return null|string
     */
    public function getCompany();

    /**
     * @return null|string
     */
    public function getDepartment();

    /**
     * @return null|string
     */
    public function getBuilding();

    /**
     * @return null|string
     */
    public function getApartment();

    /**
     * @return null|string
     */
    public function getPOBox();

    /**
     * @return null|string
     */
    public function getPhone();

    /**
     * @return null|string
     */
    public function getMobile();

    /**
     * @return null|string
     */
    public function getEmail();

    /**
     * @return null|string
     */
    public function getFax();

    /**
     * @return null|string
     */
    public function getAdditionalAddressInfo();

    /**
     * @return null|string
     */
    public function getExternalId();

    public function setId(?string $id): void;

    public function setKey(?string $key): void;

    public function setTitle(?string $title): void;

    public function setSalutation(?string $salutation): void;

    public function setFirstName(?string $firstName): void;

    public function setLastName(?string $lastName): void;

    public function setStreetName(?string $streetName): void;

    public function setStreetNumber(?string $streetNumber): void;

    public function setAdditionalStreetInfo(?string $additionalStreetInfo): void;

    public function setPostalCode(?string $postalCode): void;

    public function setCity(?string $city): void;

    public function setRegion(?string $region): void;

    public function setState(?string $state): void;

    public function setCountry(?string $country): void;

    public function setCompany(?string $company): void;

    public function setDepartment(?string $department): void;

    public function setBuilding(?string $building): void;

    public function setApartment(?string $apartment): void;

    public function setPOBox(?string $pOBox): void;

    public function setPhone(?string $phone): void;

    public function setMobile(?string $mobile): void;

    public function setEmail(?string $email): void;

    public function setFax(?string $fax): void;

    public function setAdditionalAddressInfo(?string $additionalAddressInfo): void;

    public function setExternalId(?string $externalId): void;
}
