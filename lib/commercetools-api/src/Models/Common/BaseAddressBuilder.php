<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BaseAddress>
 */
final class BaseAddressBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ?string
     */
    private $title;

    /**
     * @var ?string
     */
    private $salutation;

    /**
     * @var ?string
     */
    private $firstName;

    /**
     * @var ?string
     */
    private $lastName;

    /**
     * @var ?string
     */
    private $streetName;

    /**
     * @var ?string
     */
    private $streetNumber;

    /**
     * @var ?string
     */
    private $additionalStreetInfo;

    /**
     * @var ?string
     */
    private $postalCode;

    /**
     * @var ?string
     */
    private $city;

    /**
     * @var ?string
     */
    private $region;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?string
     */
    private $company;

    /**
     * @var ?string
     */
    private $department;

    /**
     * @var ?string
     */
    private $building;

    /**
     * @var ?string
     */
    private $apartment;

    /**
     * @var ?string
     */
    private $pOBox;

    /**
     * @var ?string
     */
    private $phone;

    /**
     * @var ?string
     */
    private $mobile;

    /**
     * @var ?string
     */
    private $email;

    /**
     * @var ?string
     */
    private $fax;

    /**
     * @var ?string
     */
    private $additionalAddressInfo;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * <p>Platform-generated unique identifier of the Address.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the Address.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Title of the contact, for example 'Dr.'</p>
     *
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * <p>Salutation of the contact, for example 'Mr.' or 'Ms.'</p>
     *
     * @return null|string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * <p>Given name (first name) of the contact.</p>
     *
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * <p>Family name (last name) of the contact.</p>
     *
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * <p>Name of the street.</p>
     *
     * @return null|string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * <p>Street number.</p>
     *
     * @return null|string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * <p>Further information on the street address.</p>
     *
     * @return null|string
     */
    public function getAdditionalStreetInfo()
    {
        return $this->additionalStreetInfo;
    }

    /**
     * <p>Postal code.</p>
     *
     * @return null|string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * <p>Name of the city.</p>
     *
     * @return null|string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * <p>Name of the region.</p>
     *
     * @return null|string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <p>Name of the state, for example, Colorado.</p>
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Name of the company.</p>
     *
     * @return null|string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * <p>Name of the department.</p>
     *
     * @return null|string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * <p>Number or name of the building.</p>
     *
     * @return null|string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * <p>Number or name of the apartment.</p>
     *
     * @return null|string
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * <p>Post office box number.</p>
     *
     * @return null|string
     */
    public function getPOBox()
    {
        return $this->pOBox;
    }

    /**
     * <p>Phone number of the contact.</p>
     *
     * @return null|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * <p>Mobile phone number of the contact.</p>
     *
     * @return null|string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * <p>Email address of the contact.</p>
     *
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <p>Fax number of the contact.</p>
     *
     * @return null|string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * <p>Further information on the Address.</p>
     *
     * @return null|string
     */
    public function getAdditionalAddressInfo()
    {
        return $this->additionalAddressInfo;
    }

    /**
     * <p>ID for the contact used in an external system.</p>
     *
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?string $title
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param ?string $salutation
     * @return $this
     */
    public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @param ?string $firstName
     * @return $this
     */
    public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param ?string $lastName
     * @return $this
     */
    public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param ?string $streetName
     * @return $this
     */
    public function withStreetName(?string $streetName)
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * @param ?string $streetNumber
     * @return $this
     */
    public function withStreetNumber(?string $streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * @param ?string $additionalStreetInfo
     * @return $this
     */
    public function withAdditionalStreetInfo(?string $additionalStreetInfo)
    {
        $this->additionalStreetInfo = $additionalStreetInfo;

        return $this;
    }

    /**
     * @param ?string $postalCode
     * @return $this
     */
    public function withPostalCode(?string $postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @param ?string $city
     * @return $this
     */
    public function withCity(?string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param ?string $region
     * @return $this
     */
    public function withRegion(?string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?string $company
     * @return $this
     */
    public function withCompany(?string $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @param ?string $department
     * @return $this
     */
    public function withDepartment(?string $department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * @param ?string $building
     * @return $this
     */
    public function withBuilding(?string $building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * @param ?string $apartment
     * @return $this
     */
    public function withApartment(?string $apartment)
    {
        $this->apartment = $apartment;

        return $this;
    }

    /**
     * @param ?string $pOBox
     * @return $this
     */
    public function withPOBox(?string $pOBox)
    {
        $this->pOBox = $pOBox;

        return $this;
    }

    /**
     * @param ?string $phone
     * @return $this
     */
    public function withPhone(?string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param ?string $mobile
     * @return $this
     */
    public function withMobile(?string $mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @param ?string $email
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param ?string $fax
     * @return $this
     */
    public function withFax(?string $fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @param ?string $additionalAddressInfo
     * @return $this
     */
    public function withAdditionalAddressInfo(?string $additionalAddressInfo)
    {
        $this->additionalAddressInfo = $additionalAddressInfo;

        return $this;
    }

    /**
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }


    public function build(): BaseAddress
    {
        return new BaseAddressModel(
            $this->id,
            $this->key,
            $this->country,
            $this->title,
            $this->salutation,
            $this->firstName,
            $this->lastName,
            $this->streetName,
            $this->streetNumber,
            $this->additionalStreetInfo,
            $this->postalCode,
            $this->city,
            $this->region,
            $this->state,
            $this->company,
            $this->department,
            $this->building,
            $this->apartment,
            $this->pOBox,
            $this->phone,
            $this->mobile,
            $this->email,
            $this->fax,
            $this->additionalAddressInfo,
            $this->externalId
        );
    }

    public static function of(): BaseAddressBuilder
    {
        return new self();
    }
}
