<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class AddressModel extends JsonObjectModel implements Address {
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $salutation;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $streetName;
    /**
     * @var string
     */
    protected $streetNumber;
    /**
     * @var string
     */
    protected $additionalStreetInfo;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $region;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $company;
    /**
     * @var string
     */
    protected $department;
    /**
     * @var string
     */
    protected $building;
    /**
     * @var string
     */
    protected $apartment;
    /**
     * @var string
     */
    protected $pOBox;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $mobile;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $fax;
    /**
     * @var string
     */
    protected $additionalAddressInfo;
    /**
     * @var string
     */
    protected $externalId;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(Address::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            $value = $this->raw(Address::FIELD_TITLE);
            $value = (string)$value;
            $this->title = $value;
        }
        return $this->title;
    }
    /**
     * @return string
     */
    public function getSalutation()
    {
        if (is_null($this->salutation)) {
            $value = $this->raw(Address::FIELD_SALUTATION);
            $value = (string)$value;
            $this->salutation = $value;
        }
        return $this->salutation;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        if (is_null($this->firstName)) {
            $value = $this->raw(Address::FIELD_FIRST_NAME);
            $value = (string)$value;
            $this->firstName = $value;
        }
        return $this->firstName;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            $value = $this->raw(Address::FIELD_LAST_NAME);
            $value = (string)$value;
            $this->lastName = $value;
        }
        return $this->lastName;
    }
    /**
     * @return string
     */
    public function getStreetName()
    {
        if (is_null($this->streetName)) {
            $value = $this->raw(Address::FIELD_STREET_NAME);
            $value = (string)$value;
            $this->streetName = $value;
        }
        return $this->streetName;
    }
    /**
     * @return string
     */
    public function getStreetNumber()
    {
        if (is_null($this->streetNumber)) {
            $value = $this->raw(Address::FIELD_STREET_NUMBER);
            $value = (string)$value;
            $this->streetNumber = $value;
        }
        return $this->streetNumber;
    }
    /**
     * @return string
     */
    public function getAdditionalStreetInfo()
    {
        if (is_null($this->additionalStreetInfo)) {
            $value = $this->raw(Address::FIELD_ADDITIONAL_STREET_INFO);
            $value = (string)$value;
            $this->additionalStreetInfo = $value;
        }
        return $this->additionalStreetInfo;
    }
    /**
     * @return string
     */
    public function getPostalCode()
    {
        if (is_null($this->postalCode)) {
            $value = $this->raw(Address::FIELD_POSTAL_CODE);
            $value = (string)$value;
            $this->postalCode = $value;
        }
        return $this->postalCode;
    }
    /**
     * @return string
     */
    public function getCity()
    {
        if (is_null($this->city)) {
            $value = $this->raw(Address::FIELD_CITY);
            $value = (string)$value;
            $this->city = $value;
        }
        return $this->city;
    }
    /**
     * @return string
     */
    public function getRegion()
    {
        if (is_null($this->region)) {
            $value = $this->raw(Address::FIELD_REGION);
            $value = (string)$value;
            $this->region = $value;
        }
        return $this->region;
    }
    /**
     * @return string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(Address::FIELD_STATE);
            $value = (string)$value;
            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            $value = $this->raw(Address::FIELD_COUNTRY);
            $value = (string)$value;
            $this->country = $value;
        }
        return $this->country;
    }
    /**
     * @return string
     */
    public function getCompany()
    {
        if (is_null($this->company)) {
            $value = $this->raw(Address::FIELD_COMPANY);
            $value = (string)$value;
            $this->company = $value;
        }
        return $this->company;
    }
    /**
     * @return string
     */
    public function getDepartment()
    {
        if (is_null($this->department)) {
            $value = $this->raw(Address::FIELD_DEPARTMENT);
            $value = (string)$value;
            $this->department = $value;
        }
        return $this->department;
    }
    /**
     * @return string
     */
    public function getBuilding()
    {
        if (is_null($this->building)) {
            $value = $this->raw(Address::FIELD_BUILDING);
            $value = (string)$value;
            $this->building = $value;
        }
        return $this->building;
    }
    /**
     * @return string
     */
    public function getApartment()
    {
        if (is_null($this->apartment)) {
            $value = $this->raw(Address::FIELD_APARTMENT);
            $value = (string)$value;
            $this->apartment = $value;
        }
        return $this->apartment;
    }
    /**
     * @return string
     */
    public function getPOBox()
    {
        if (is_null($this->pOBox)) {
            $value = $this->raw(Address::FIELD_P_O_BOX);
            $value = (string)$value;
            $this->pOBox = $value;
        }
        return $this->pOBox;
    }
    /**
     * @return string
     */
    public function getPhone()
    {
        if (is_null($this->phone)) {
            $value = $this->raw(Address::FIELD_PHONE);
            $value = (string)$value;
            $this->phone = $value;
        }
        return $this->phone;
    }
    /**
     * @return string
     */
    public function getMobile()
    {
        if (is_null($this->mobile)) {
            $value = $this->raw(Address::FIELD_MOBILE);
            $value = (string)$value;
            $this->mobile = $value;
        }
        return $this->mobile;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            $value = $this->raw(Address::FIELD_EMAIL);
            $value = (string)$value;
            $this->email = $value;
        }
        return $this->email;
    }
    /**
     * @return string
     */
    public function getFax()
    {
        if (is_null($this->fax)) {
            $value = $this->raw(Address::FIELD_FAX);
            $value = (string)$value;
            $this->fax = $value;
        }
        return $this->fax;
    }
    /**
     * @return string
     */
    public function getAdditionalAddressInfo()
    {
        if (is_null($this->additionalAddressInfo)) {
            $value = $this->raw(Address::FIELD_ADDITIONAL_ADDRESS_INFO);
            $value = (string)$value;
            $this->additionalAddressInfo = $value;
        }
        return $this->additionalAddressInfo;
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            $value = $this->raw(Address::FIELD_EXTERNAL_ID);
            $value = (string)$value;
            $this->externalId = $value;
        }
        return $this->externalId;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = (string)$title;

        return $this;
    }
    /**
     * @param string $salutation
     * @return $this
     */
    public function setSalutation(string $salutation)
    {
        $this->salutation = (string)$salutation;

        return $this;
    }
    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = (string)$firstName;

        return $this;
    }
    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = (string)$lastName;

        return $this;
    }
    /**
     * @param string $streetName
     * @return $this
     */
    public function setStreetName(string $streetName)
    {
        $this->streetName = (string)$streetName;

        return $this;
    }
    /**
     * @param string $streetNumber
     * @return $this
     */
    public function setStreetNumber(string $streetNumber)
    {
        $this->streetNumber = (string)$streetNumber;

        return $this;
    }
    /**
     * @param string $additionalStreetInfo
     * @return $this
     */
    public function setAdditionalStreetInfo(string $additionalStreetInfo)
    {
        $this->additionalStreetInfo = (string)$additionalStreetInfo;

        return $this;
    }
    /**
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = (string)$postalCode;

        return $this;
    }
    /**
     * @param string $city
     * @return $this
     */
    public function setCity(string $city)
    {
        $this->city = (string)$city;

        return $this;
    }
    /**
     * @param string $region
     * @return $this
     */
    public function setRegion(string $region)
    {
        $this->region = (string)$region;

        return $this;
    }
    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = (string)$state;

        return $this;
    }
    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = (string)$country;

        return $this;
    }
    /**
     * @param string $company
     * @return $this
     */
    public function setCompany(string $company)
    {
        $this->company = (string)$company;

        return $this;
    }
    /**
     * @param string $department
     * @return $this
     */
    public function setDepartment(string $department)
    {
        $this->department = (string)$department;

        return $this;
    }
    /**
     * @param string $building
     * @return $this
     */
    public function setBuilding(string $building)
    {
        $this->building = (string)$building;

        return $this;
    }
    /**
     * @param string $apartment
     * @return $this
     */
    public function setApartment(string $apartment)
    {
        $this->apartment = (string)$apartment;

        return $this;
    }
    /**
     * @param string $pOBox
     * @return $this
     */
    public function setPOBox(string $pOBox)
    {
        $this->pOBox = (string)$pOBox;

        return $this;
    }
    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone(string $phone)
    {
        $this->phone = (string)$phone;

        return $this;
    }
    /**
     * @param string $mobile
     * @return $this
     */
    public function setMobile(string $mobile)
    {
        $this->mobile = (string)$mobile;

        return $this;
    }
    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = (string)$email;

        return $this;
    }
    /**
     * @param string $fax
     * @return $this
     */
    public function setFax(string $fax)
    {
        $this->fax = (string)$fax;

        return $this;
    }
    /**
     * @param string $additionalAddressInfo
     * @return $this
     */
    public function setAdditionalAddressInfo(string $additionalAddressInfo)
    {
        $this->additionalAddressInfo = (string)$additionalAddressInfo;

        return $this;
    }
    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = (string)$externalId;

        return $this;
    }

}
