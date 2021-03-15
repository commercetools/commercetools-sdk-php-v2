<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Address>
 */
final class AddressBuilder implements Builder
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
    private $country;

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
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return null|string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return null|string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @return null|string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @return null|string
     */
    public function getAdditionalStreetInfo()
    {
        return $this->additionalStreetInfo;
    }

    /**
     * @return null|string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return null|string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return null|string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return null|string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return null|string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return null|string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @return null|string
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * @return null|string
     */
    public function getPOBox()
    {
        return $this->pOBox;
    }

    /**
     * @return null|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return null|string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return null|string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @return null|string
     */
    public function getAdditionalAddressInfo()
    {
        return $this->additionalAddressInfo;
    }

    /**
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
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

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


    public function build(): Address
    {
        return new AddressModel(
            $this->id,
            $this->key,
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
            $this->country,
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

    public static function of(): AddressBuilder
    {
        return new self();
    }
}
