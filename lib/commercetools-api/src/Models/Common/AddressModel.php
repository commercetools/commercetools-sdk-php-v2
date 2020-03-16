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
final class AddressModel extends JsonObjectModel implements Address
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
    protected $country;

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


    public function __construct(
        string $id = null,
        string $key = null,
        string $title = null,
        string $salutation = null,
        string $firstName = null,
        string $lastName = null,
        string $streetName = null,
        string $streetNumber = null,
        string $additionalStreetInfo = null,
        string $postalCode = null,
        string $city = null,
        string $region = null,
        string $state = null,
        string $country = null,
        string $company = null,
        string $department = null,
        string $building = null,
        string $apartment = null,
        string $pOBox = null,
        string $phone = null,
        string $mobile = null,
        string $email = null,
        string $fax = null,
        string $additionalAddressInfo = null,
        string $externalId = null
    ) {
        $this->id = $id;
        $this->key = $key;
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
        $this->country = $country;
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
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_TITLE);
            if (is_null($data)) {
                return null;
            }
            $this->title = (string) $data;
        }

        return $this->title;
    }

    /**
     * @return null|string
     */
    public function getSalutation()
    {
        if (is_null($this->salutation)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_SALUTATION);
            if (is_null($data)) {
                return null;
            }
            $this->salutation = (string) $data;
        }

        return $this->salutation;
    }

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        if (is_null($this->firstName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_FIRST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->firstName = (string) $data;
        }

        return $this->firstName;
    }

    /**
     * @return null|string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_LAST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->lastName = (string) $data;
        }

        return $this->lastName;
    }

    /**
     * @return null|string
     */
    public function getStreetName()
    {
        if (is_null($this->streetName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_STREET_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->streetName = (string) $data;
        }

        return $this->streetName;
    }

    /**
     * @return null|string
     */
    public function getStreetNumber()
    {
        if (is_null($this->streetNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_STREET_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->streetNumber = (string) $data;
        }

        return $this->streetNumber;
    }

    /**
     * @return null|string
     */
    public function getAdditionalStreetInfo()
    {
        if (is_null($this->additionalStreetInfo)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_ADDITIONAL_STREET_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->additionalStreetInfo = (string) $data;
        }

        return $this->additionalStreetInfo;
    }

    /**
     * @return null|string
     */
    public function getPostalCode()
    {
        if (is_null($this->postalCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_POSTAL_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->postalCode = (string) $data;
        }

        return $this->postalCode;
    }

    /**
     * @return null|string
     */
    public function getCity()
    {
        if (is_null($this->city)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_CITY);
            if (is_null($data)) {
                return null;
            }
            $this->city = (string) $data;
        }

        return $this->city;
    }

    /**
     * @return null|string
     */
    public function getRegion()
    {
        if (is_null($this->region)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_REGION);
            if (is_null($data)) {
                return null;
            }
            $this->region = (string) $data;
        }

        return $this->region;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * @return null|string
     */
    public function getCompany()
    {
        if (is_null($this->company)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_COMPANY);
            if (is_null($data)) {
                return null;
            }
            $this->company = (string) $data;
        }

        return $this->company;
    }

    /**
     * @return null|string
     */
    public function getDepartment()
    {
        if (is_null($this->department)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_DEPARTMENT);
            if (is_null($data)) {
                return null;
            }
            $this->department = (string) $data;
        }

        return $this->department;
    }

    /**
     * @return null|string
     */
    public function getBuilding()
    {
        if (is_null($this->building)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_BUILDING);
            if (is_null($data)) {
                return null;
            }
            $this->building = (string) $data;
        }

        return $this->building;
    }

    /**
     * @return null|string
     */
    public function getApartment()
    {
        if (is_null($this->apartment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_APARTMENT);
            if (is_null($data)) {
                return null;
            }
            $this->apartment = (string) $data;
        }

        return $this->apartment;
    }

    /**
     * @return null|string
     */
    public function getPOBox()
    {
        if (is_null($this->pOBox)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_P_O_BOX);
            if (is_null($data)) {
                return null;
            }
            $this->pOBox = (string) $data;
        }

        return $this->pOBox;
    }

    /**
     * @return null|string
     */
    public function getPhone()
    {
        if (is_null($this->phone)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_PHONE);
            if (is_null($data)) {
                return null;
            }
            $this->phone = (string) $data;
        }

        return $this->phone;
    }

    /**
     * @return null|string
     */
    public function getMobile()
    {
        if (is_null($this->mobile)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_MOBILE);
            if (is_null($data)) {
                return null;
            }
            $this->mobile = (string) $data;
        }

        return $this->mobile;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * @return null|string
     */
    public function getFax()
    {
        if (is_null($this->fax)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_FAX);
            if (is_null($data)) {
                return null;
            }
            $this->fax = (string) $data;
        }

        return $this->fax;
    }

    /**
     * @return null|string
     */
    public function getAdditionalAddressInfo()
    {
        if (is_null($this->additionalAddressInfo)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_ADDITIONAL_ADDRESS_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->additionalAddressInfo = (string) $data;
        }

        return $this->additionalAddressInfo;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Address::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
    }

    public function setStreetNumber(?string $streetNumber): void
    {
        $this->streetNumber = $streetNumber;
    }

    public function setAdditionalStreetInfo(?string $additionalStreetInfo): void
    {
        $this->additionalStreetInfo = $additionalStreetInfo;
    }

    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    public function setDepartment(?string $department): void
    {
        $this->department = $department;
    }

    public function setBuilding(?string $building): void
    {
        $this->building = $building;
    }

    public function setApartment(?string $apartment): void
    {
        $this->apartment = $apartment;
    }

    public function setPOBox(?string $pOBox): void
    {
        $this->pOBox = $pOBox;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }

    public function setAdditionalAddressInfo(?string $additionalAddressInfo): void
    {
        $this->additionalAddressInfo = $additionalAddressInfo;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
}
