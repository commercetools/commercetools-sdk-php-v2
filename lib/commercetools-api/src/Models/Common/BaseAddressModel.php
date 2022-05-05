<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BaseAddressModel extends JsonObjectModel implements BaseAddress
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?string
     */
    protected $title;

    /**
     * @var ?string
     */
    protected $salutation;

    /**
     * @var ?string
     */
    protected $firstName;

    /**
     * @var ?string
     */
    protected $lastName;

    /**
     * @var ?string
     */
    protected $streetName;

    /**
     * @var ?string
     */
    protected $streetNumber;

    /**
     * @var ?string
     */
    protected $additionalStreetInfo;

    /**
     * @var ?string
     */
    protected $postalCode;

    /**
     * @var ?string
     */
    protected $city;

    /**
     * @var ?string
     */
    protected $region;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $company;

    /**
     * @var ?string
     */
    protected $department;

    /**
     * @var ?string
     */
    protected $building;

    /**
     * @var ?string
     */
    protected $apartment;

    /**
     * @var ?string
     */
    protected $pOBox;

    /**
     * @var ?string
     */
    protected $phone;

    /**
     * @var ?string
     */
    protected $mobile;

    /**
     * @var ?string
     */
    protected $email;

    /**
     * @var ?string
     */
    protected $fax;

    /**
     * @var ?string
     */
    protected $additionalAddressInfo;

    /**
     * @var ?string
     */
    protected $externalId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $key = null,
        ?string $country = null,
        ?string $title = null,
        ?string $salutation = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $streetName = null,
        ?string $streetNumber = null,
        ?string $additionalStreetInfo = null,
        ?string $postalCode = null,
        ?string $city = null,
        ?string $region = null,
        ?string $state = null,
        ?string $company = null,
        ?string $department = null,
        ?string $building = null,
        ?string $apartment = null,
        ?string $pOBox = null,
        ?string $phone = null,
        ?string $mobile = null,
        ?string $email = null,
        ?string $fax = null,
        ?string $additionalAddressInfo = null,
        ?string $externalId = null
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->country = $country;
        $this->title = $title;
        $this->salutation = $salutation;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->streetName = $streetName;
        $this->streetNumber = $streetNumber;
        $this->additionalStreetInfo = $additionalStreetInfo;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->region = $region;
        $this->state = $state;
        $this->company = $company;
        $this->department = $department;
        $this->building = $building;
        $this->apartment = $apartment;
        $this->pOBox = $pOBox;
        $this->phone = $phone;
        $this->mobile = $mobile;
        $this->email = $email;
        $this->fax = $fax;
        $this->additionalAddressInfo = $additionalAddressInfo;
        $this->externalId = $externalId;
    }

    /**
     * <p>Platform-generated unique identifier of the Address.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the Address.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>Title of the contact, for example 'Dr.'</p>
     *
     * @return null|string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TITLE);
            if (is_null($data)) {
                return null;
            }
            $this->title = (string) $data;
        }

        return $this->title;
    }

    /**
     * <p>Salutation of the contact, for example 'Mr.' or 'Ms.'</p>
     *
     * @return null|string
     */
    public function getSalutation()
    {
        if (is_null($this->salutation)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SALUTATION);
            if (is_null($data)) {
                return null;
            }
            $this->salutation = (string) $data;
        }

        return $this->salutation;
    }

    /**
     * <p>Given name (first name) of the contact.</p>
     *
     * @return null|string
     */
    public function getFirstName()
    {
        if (is_null($this->firstName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIRST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->firstName = (string) $data;
        }

        return $this->firstName;
    }

    /**
     * <p>Family name (last name) of the contact.</p>
     *
     * @return null|string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->lastName = (string) $data;
        }

        return $this->lastName;
    }

    /**
     * <p>Name of the street.</p>
     *
     * @return null|string
     */
    public function getStreetName()
    {
        if (is_null($this->streetName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STREET_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->streetName = (string) $data;
        }

        return $this->streetName;
    }

    /**
     * <p>Street number.</p>
     *
     * @return null|string
     */
    public function getStreetNumber()
    {
        if (is_null($this->streetNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STREET_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->streetNumber = (string) $data;
        }

        return $this->streetNumber;
    }

    /**
     * <p>Further information on the street address.</p>
     *
     * @return null|string
     */
    public function getAdditionalStreetInfo()
    {
        if (is_null($this->additionalStreetInfo)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDITIONAL_STREET_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->additionalStreetInfo = (string) $data;
        }

        return $this->additionalStreetInfo;
    }

    /**
     * <p>Postal code.</p>
     *
     * @return null|string
     */
    public function getPostalCode()
    {
        if (is_null($this->postalCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_POSTAL_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->postalCode = (string) $data;
        }

        return $this->postalCode;
    }

    /**
     * <p>Name of the city.</p>
     *
     * @return null|string
     */
    public function getCity()
    {
        if (is_null($this->city)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CITY);
            if (is_null($data)) {
                return null;
            }
            $this->city = (string) $data;
        }

        return $this->city;
    }

    /**
     * <p>Name of the region.</p>
     *
     * @return null|string
     */
    public function getRegion()
    {
        if (is_null($this->region)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REGION);
            if (is_null($data)) {
                return null;
            }
            $this->region = (string) $data;
        }

        return $this->region;
    }

    /**
     * <p>Name of the state, for example, Colorado.</p>
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>Name of the company.</p>
     *
     * @return null|string
     */
    public function getCompany()
    {
        if (is_null($this->company)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COMPANY);
            if (is_null($data)) {
                return null;
            }
            $this->company = (string) $data;
        }

        return $this->company;
    }

    /**
     * <p>Name of the department.</p>
     *
     * @return null|string
     */
    public function getDepartment()
    {
        if (is_null($this->department)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DEPARTMENT);
            if (is_null($data)) {
                return null;
            }
            $this->department = (string) $data;
        }

        return $this->department;
    }

    /**
     * <p>Number or name of the building.</p>
     *
     * @return null|string
     */
    public function getBuilding()
    {
        if (is_null($this->building)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_BUILDING);
            if (is_null($data)) {
                return null;
            }
            $this->building = (string) $data;
        }

        return $this->building;
    }

    /**
     * <p>Number or name of the apartment.</p>
     *
     * @return null|string
     */
    public function getApartment()
    {
        if (is_null($this->apartment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_APARTMENT);
            if (is_null($data)) {
                return null;
            }
            $this->apartment = (string) $data;
        }

        return $this->apartment;
    }

    /**
     * <p>Post office box number.</p>
     *
     * @return null|string
     */
    public function getPOBox()
    {
        if (is_null($this->pOBox)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_P_O_BOX);
            if (is_null($data)) {
                return null;
            }
            $this->pOBox = (string) $data;
        }

        return $this->pOBox;
    }

    /**
     * <p>Phone number of the contact.</p>
     *
     * @return null|string
     */
    public function getPhone()
    {
        if (is_null($this->phone)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PHONE);
            if (is_null($data)) {
                return null;
            }
            $this->phone = (string) $data;
        }

        return $this->phone;
    }

    /**
     * <p>Mobile phone number of the contact.</p>
     *
     * @return null|string
     */
    public function getMobile()
    {
        if (is_null($this->mobile)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MOBILE);
            if (is_null($data)) {
                return null;
            }
            $this->mobile = (string) $data;
        }

        return $this->mobile;
    }

    /**
     * <p>Email address of the contact.</p>
     *
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * <p>Fax number of the contact.</p>
     *
     * @return null|string
     */
    public function getFax()
    {
        if (is_null($this->fax)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FAX);
            if (is_null($data)) {
                return null;
            }
            $this->fax = (string) $data;
        }

        return $this->fax;
    }

    /**
     * <p>Further information on the Address.</p>
     *
     * @return null|string
     */
    public function getAdditionalAddressInfo()
    {
        if (is_null($this->additionalAddressInfo)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDITIONAL_ADDRESS_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->additionalAddressInfo = (string) $data;
        }

        return $this->additionalAddressInfo;
    }

    /**
     * <p>ID for the contact used in an external system.</p>
     *
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }

    /**
     * @param ?string $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param ?string $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param ?string $streetName
     */
    public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
    }

    /**
     * @param ?string $streetNumber
     */
    public function setStreetNumber(?string $streetNumber): void
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * @param ?string $additionalStreetInfo
     */
    public function setAdditionalStreetInfo(?string $additionalStreetInfo): void
    {
        $this->additionalStreetInfo = $additionalStreetInfo;
    }

    /**
     * @param ?string $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @param ?string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @param ?string $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?string $company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    /**
     * @param ?string $department
     */
    public function setDepartment(?string $department): void
    {
        $this->department = $department;
    }

    /**
     * @param ?string $building
     */
    public function setBuilding(?string $building): void
    {
        $this->building = $building;
    }

    /**
     * @param ?string $apartment
     */
    public function setApartment(?string $apartment): void
    {
        $this->apartment = $apartment;
    }

    /**
     * @param ?string $pOBox
     */
    public function setPOBox(?string $pOBox): void
    {
        $this->pOBox = $pOBox;
    }

    /**
     * @param ?string $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param ?string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param ?string $fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @param ?string $additionalAddressInfo
     */
    public function setAdditionalAddressInfo(?string $additionalAddressInfo): void
    {
        $this->additionalAddressInfo = $additionalAddressInfo;
    }

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
}
