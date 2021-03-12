<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void;

    /**
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void;

    /**
     * @param ?string $firstName
     */
    public function setFirstName(?string $firstName): void;

    /**
     * @param ?string $lastName
     */
    public function setLastName(?string $lastName): void;

    /**
     * @param ?string $streetName
     */
    public function setStreetName(?string $streetName): void;

    /**
     * @param ?string $streetNumber
     */
    public function setStreetNumber(?string $streetNumber): void;

    /**
     * @param ?string $additionalStreetInfo
     */
    public function setAdditionalStreetInfo(?string $additionalStreetInfo): void;

    /**
     * @param ?string $postalCode
     */
    public function setPostalCode(?string $postalCode): void;

    /**
     * @param ?string $city
     */
    public function setCity(?string $city): void;

    /**
     * @param ?string $region
     */
    public function setRegion(?string $region): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $company
     */
    public function setCompany(?string $company): void;

    /**
     * @param ?string $department
     */
    public function setDepartment(?string $department): void;

    /**
     * @param ?string $building
     */
    public function setBuilding(?string $building): void;

    /**
     * @param ?string $apartment
     */
    public function setApartment(?string $apartment): void;

    /**
     * @param ?string $pOBox
     */
    public function setPOBox(?string $pOBox): void;

    /**
     * @param ?string $phone
     */
    public function setPhone(?string $phone): void;

    /**
     * @param ?string $mobile
     */
    public function setMobile(?string $mobile): void;

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void;

    /**
     * @param ?string $fax
     */
    public function setFax(?string $fax): void;

    /**
     * @param ?string $additionalAddressInfo
     */
    public function setAdditionalAddressInfo(?string $additionalAddressInfo): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;
}
