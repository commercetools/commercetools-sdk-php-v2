<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

interface Address extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_TITLE = 'title';
    const FIELD_SALUTATION = 'salutation';
    const FIELD_FIRST_NAME = 'firstName';
    const FIELD_LAST_NAME = 'lastName';
    const FIELD_STREET_NAME = 'streetName';
    const FIELD_STREET_NUMBER = 'streetNumber';
    const FIELD_ADDITIONAL_STREET_INFO = 'additionalStreetInfo';
    const FIELD_POSTAL_CODE = 'postalCode';
    const FIELD_CITY = 'city';
    const FIELD_REGION = 'region';
    const FIELD_STATE = 'state';
    const FIELD_COUNTRY = 'country';
    const FIELD_COMPANY = 'company';
    const FIELD_DEPARTMENT = 'department';
    const FIELD_BUILDING = 'building';
    const FIELD_APARTMENT = 'apartment';
    const FIELD_P_O_BOX = 'pOBox';
    const FIELD_PHONE = 'phone';
    const FIELD_MOBILE = 'mobile';
    const FIELD_EMAIL = 'email';
    const FIELD_FAX = 'fax';
    const FIELD_ADDITIONAL_ADDRESS_INFO = 'additionalAddressInfo';
    const FIELD_EXTERNAL_ID = 'externalId';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getSalutation();

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
    public function getStreetName();

    /**
     * @return string
     */
    public function getStreetNumber();

    /**
     * @return string
     */
    public function getAdditionalStreetInfo();

    /**
     * @return string
     */
    public function getPostalCode();

    /**
     * @return string
     */
    public function getCity();

    /**
     * @return string
     */
    public function getRegion();

    /**
     * @return string
     */
    public function getState();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getCompany();

    /**
     * @return string
     */
    public function getDepartment();

    /**
     * @return string
     */
    public function getBuilding();

    /**
     * @return string
     */
    public function getApartment();

    /**
     * @return string
     */
    public function getPOBox();

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @return string
     */
    public function getMobile();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getFax();

    /**
     * @return string
     */
    public function getAdditionalAddressInfo();

    /**
     * @return string
     */
    public function getExternalId();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * @param string $salutation
     * @return $this
     */
    public function setSalutation(string $salutation);

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
     * @param string $streetName
     * @return $this
     */
    public function setStreetName(string $streetName);

    /**
     * @param string $streetNumber
     * @return $this
     */
    public function setStreetNumber(string $streetNumber);

    /**
     * @param string $additionalStreetInfo
     * @return $this
     */
    public function setAdditionalStreetInfo(string $additionalStreetInfo);

    /**
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode(string $postalCode);

    /**
     * @param string $city
     * @return $this
     */
    public function setCity(string $city);

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion(string $region);

    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * @param string $company
     * @return $this
     */
    public function setCompany(string $company);

    /**
     * @param string $department
     * @return $this
     */
    public function setDepartment(string $department);

    /**
     * @param string $building
     * @return $this
     */
    public function setBuilding(string $building);

    /**
     * @param string $apartment
     * @return $this
     */
    public function setApartment(string $apartment);

    /**
     * @param string $pOBox
     * @return $this
     */
    public function setPOBox(string $pOBox);

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone(string $phone);

    /**
     * @param string $mobile
     * @return $this
     */
    public function setMobile(string $mobile);

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email);

    /**
     * @param string $fax
     * @return $this
     */
    public function setFax(string $fax);

    /**
     * @param string $additionalAddressInfo
     * @return $this
     */
    public function setAdditionalAddressInfo(string $additionalAddressInfo);

    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId);

}
