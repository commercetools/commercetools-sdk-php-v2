<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Address>
 */
final class AddressBuilder implements Builder
{
    public function __construct() {
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
       return $this->country;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLastName()
    {
       return $this->lastName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPOBox()
    {
       return $this->pOBox;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCity()
    {
       return $this->city;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getStreetNumber()
    {
       return $this->streetNumber;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPostalCode()
    {
       return $this->postalCode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMobile()
    {
       return $this->mobile;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       return $this->externalId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAdditionalAddressInfo()
    {
       return $this->additionalAddressInfo;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTitle()
    {
       return $this->title;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getBuilding()
    {
       return $this->building;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFirstName()
    {
       return $this->firstName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getStreetName()
    {
       return $this->streetName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPhone()
    {
       return $this->phone;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAdditionalStreetInfo()
    {
       return $this->additionalStreetInfo;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCompany()
    {
       return $this->company;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSalutation()
    {
       return $this->salutation;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFax()
    {
       return $this->fax;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDepartment()
    {
       return $this->department;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getRegion()
    {
       return $this->region;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getEmail()
    {
       return $this->email;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getApartment()
    {
       return $this->apartment;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    /**
     * @return $this
     */
    final public function withCountry(?string $country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPOBox(?string $pOBox)
    {
        $this->pOBox = $pOBox;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCity(?string $city)
    {
        $this->city = $city;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStreetNumber(?string $streetNumber)
    {
        $this->streetNumber = $streetNumber;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPostalCode(?string $postalCode)
    {
        $this->postalCode = $postalCode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMobile(?string $mobile)
    {
        $this->mobile = $mobile;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAdditionalAddressInfo(?string $additionalAddressInfo)
    {
        $this->additionalAddressInfo = $additionalAddressInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTitle(?string $title)
    {
        $this->title = $title;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withBuilding(?string $building)
    {
        $this->building = $building;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStreetName(?string $streetName)
    {
        $this->streetName = $streetName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPhone(?string $phone)
    {
        $this->phone = $phone;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAdditionalStreetInfo(?string $additionalStreetInfo)
    {
        $this->additionalStreetInfo = $additionalStreetInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCompany(?string $company)
    {
        $this->company = $company;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?string $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFax(?string $fax)
    {
        $this->fax = $fax;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDepartment(?string $department)
    {
        $this->department = $department;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withRegion(?string $region)
    {
        $this->region = $region;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withEmail(?string $email)
    {
        $this->email = $email;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withApartment(?string $apartment)
    {
        $this->apartment = $apartment;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    public function build(): Address {
        return new AddressModel(
            $this->country,
            $this->lastName,
            $this->pOBox,
            $this->city,
            $this->streetNumber,
            $this->postalCode,
            $this->mobile,
            $this->externalId,
            $this->additionalAddressInfo,
            $this->title,
            $this->building,
            $this->firstName,
            $this->streetName,
            $this->phone,
            $this->additionalStreetInfo,
            $this->company,
            $this->state,
            $this->salutation,
            $this->id,
            $this->fax,
            $this->department,
            $this->region,
            $this->email,
            $this->apartment,
            $this->key
        );
    }
    
    public static function of(): AddressBuilder
    {
        return new self();
    }
}