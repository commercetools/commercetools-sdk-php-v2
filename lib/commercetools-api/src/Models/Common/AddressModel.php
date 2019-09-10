<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class AddressModel extends JsonObjectModel implements Address
{
    
    public function __construct(
        string $country = null,
        string $lastName = null,
        string $pOBox = null,
        string $city = null,
        string $streetNumber = null,
        string $postalCode = null,
        string $mobile = null,
        string $externalId = null,
        string $additionalAddressInfo = null,
        string $title = null,
        string $building = null,
        string $firstName = null,
        string $streetName = null,
        string $phone = null,
        string $additionalStreetInfo = null,
        string $company = null,
        string $state = null,
        string $salutation = null,
        string $id = null,
        string $fax = null,
        string $department = null,
        string $region = null,
        string $email = null,
        string $apartment = null,
        string $key = null
    ) {
        $this->country = $country;
        $this->lastName = $lastName;
        $this->pOBox = $pOBox;
        $this->city = $city;
        $this->streetNumber = $streetNumber;
        $this->postalCode = $postalCode;
        $this->mobile = $mobile;
        $this->externalId = $externalId;
        $this->additionalAddressInfo = $additionalAddressInfo;
        $this->title = $title;
        $this->building = $building;
        $this->firstName = $firstName;
        $this->streetName = $streetName;
        $this->phone = $phone;
        $this->additionalStreetInfo = $additionalStreetInfo;
        $this->company = $company;
        $this->state = $state;
        $this->salutation = $salutation;
        $this->id = $id;
        $this->fax = $fax;
        $this->department = $department;
        $this->region = $region;
        $this->email = $email;
        $this->apartment = $apartment;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?string
     */
    protected $lastName;
    
    /**
     * @var ?string
     */
    protected $pOBox;
    
    /**
     * @var ?string
     */
    protected $city;
    
    /**
     * @var ?string
     */
    protected $streetNumber;
    
    /**
     * @var ?string
     */
    protected $postalCode;
    
    /**
     * @var ?string
     */
    protected $mobile;
    
    /**
     * @var ?string
     */
    protected $externalId;
    
    /**
     * @var ?string
     */
    protected $additionalAddressInfo;
    
    /**
     * @var ?string
     */
    protected $title;
    
    /**
     * @var ?string
     */
    protected $building;
    
    /**
     * @var ?string
     */
    protected $firstName;
    
    /**
     * @var ?string
     */
    protected $streetName;
    
    /**
     * @var ?string
     */
    protected $phone;
    
    /**
     * @var ?string
     */
    protected $additionalStreetInfo;
    
    /**
     * @var ?string
     */
    protected $company;
    
    /**
     * @var ?string
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $salutation;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?string
     */
    protected $fax;
    
    /**
     * @var ?string
     */
    protected $department;
    
    /**
     * @var ?string
     */
    protected $region;
    
    /**
     * @var ?string
     */
    protected $email;
    
    /**
     * @var ?string
     */
    protected $apartment;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     * @return string|null
     */
    final public function getCountry()
    {
       if (is_null($this->country)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_COUNTRY);
           if (is_null($data)) {
               return null;
           }
           $this->country = (string)$data;
       }
       return $this->country;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLastName()
    {
       if (is_null($this->lastName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_LAST_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->lastName = (string)$data;
       }
       return $this->lastName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPOBox()
    {
       if (is_null($this->pOBox)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_P_O_BOX);
           if (is_null($data)) {
               return null;
           }
           $this->pOBox = (string)$data;
       }
       return $this->pOBox;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCity()
    {
       if (is_null($this->city)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_CITY);
           if (is_null($data)) {
               return null;
           }
           $this->city = (string)$data;
       }
       return $this->city;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getStreetNumber()
    {
       if (is_null($this->streetNumber)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_STREET_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->streetNumber = (string)$data;
       }
       return $this->streetNumber;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPostalCode()
    {
       if (is_null($this->postalCode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_POSTAL_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->postalCode = (string)$data;
       }
       return $this->postalCode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMobile()
    {
       if (is_null($this->mobile)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_MOBILE);
           if (is_null($data)) {
               return null;
           }
           $this->mobile = (string)$data;
       }
       return $this->mobile;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       if (is_null($this->externalId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_EXTERNAL_ID);
           if (is_null($data)) {
               return null;
           }
           $this->externalId = (string)$data;
       }
       return $this->externalId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAdditionalAddressInfo()
    {
       if (is_null($this->additionalAddressInfo)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_ADDITIONAL_ADDRESS_INFO);
           if (is_null($data)) {
               return null;
           }
           $this->additionalAddressInfo = (string)$data;
       }
       return $this->additionalAddressInfo;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTitle()
    {
       if (is_null($this->title)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_TITLE);
           if (is_null($data)) {
               return null;
           }
           $this->title = (string)$data;
       }
       return $this->title;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getBuilding()
    {
       if (is_null($this->building)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_BUILDING);
           if (is_null($data)) {
               return null;
           }
           $this->building = (string)$data;
       }
       return $this->building;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFirstName()
    {
       if (is_null($this->firstName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_FIRST_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->firstName = (string)$data;
       }
       return $this->firstName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getStreetName()
    {
       if (is_null($this->streetName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_STREET_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->streetName = (string)$data;
       }
       return $this->streetName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPhone()
    {
       if (is_null($this->phone)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_PHONE);
           if (is_null($data)) {
               return null;
           }
           $this->phone = (string)$data;
       }
       return $this->phone;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAdditionalStreetInfo()
    {
       if (is_null($this->additionalStreetInfo)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_ADDITIONAL_STREET_INFO);
           if (is_null($data)) {
               return null;
           }
           $this->additionalStreetInfo = (string)$data;
       }
       return $this->additionalStreetInfo;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCompany()
    {
       if (is_null($this->company)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_COMPANY);
           if (is_null($data)) {
               return null;
           }
           $this->company = (string)$data;
       }
       return $this->company;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->state = (string)$data;
       }
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSalutation()
    {
       if (is_null($this->salutation)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_SALUTATION);
           if (is_null($data)) {
               return null;
           }
           $this->salutation = (string)$data;
       }
       return $this->salutation;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFax()
    {
       if (is_null($this->fax)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_FAX);
           if (is_null($data)) {
               return null;
           }
           $this->fax = (string)$data;
       }
       return $this->fax;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDepartment()
    {
       if (is_null($this->department)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_DEPARTMENT);
           if (is_null($data)) {
               return null;
           }
           $this->department = (string)$data;
       }
       return $this->department;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getRegion()
    {
       if (is_null($this->region)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_REGION);
           if (is_null($data)) {
               return null;
           }
           $this->region = (string)$data;
       }
       return $this->region;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getEmail()
    {
       if (is_null($this->email)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->email = (string)$data;
       }
       return $this->email;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getApartment()
    {
       if (is_null($this->apartment)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_APARTMENT);
           if (is_null($data)) {
               return null;
           }
           $this->apartment = (string)$data;
       }
       return $this->apartment;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Address::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
    
    final public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }
    
    final public function setPOBox(?string $pOBox): void
    {
        $this->pOBox = $pOBox;
    }
    
    final public function setCity(?string $city): void
    {
        $this->city = $city;
    }
    
    final public function setStreetNumber(?string $streetNumber): void
    {
        $this->streetNumber = $streetNumber;
    }
    
    final public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }
    
    final public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }
    
    final public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
    
    final public function setAdditionalAddressInfo(?string $additionalAddressInfo): void
    {
        $this->additionalAddressInfo = $additionalAddressInfo;
    }
    
    final public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    
    final public function setBuilding(?string $building): void
    {
        $this->building = $building;
    }
    
    final public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }
    
    final public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
    }
    
    final public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }
    
    final public function setAdditionalStreetInfo(?string $additionalStreetInfo): void
    {
        $this->additionalStreetInfo = $additionalStreetInfo;
    }
    
    final public function setCompany(?string $company): void
    {
        $this->company = $company;
    }
    
    final public function setState(?string $state): void
    {
        $this->state = $state;
    }
    
    final public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }
    
    final public function setDepartment(?string $department): void
    {
        $this->department = $department;
    }
    
    final public function setRegion(?string $region): void
    {
        $this->region = $region;
    }
    
    final public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    
    final public function setApartment(?string $apartment): void
    {
        $this->apartment = $apartment;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}