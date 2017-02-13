<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Address extends JsonObject {
    protected $id;
    protected $title;
    protected $salutation;
    protected $firstName;
    protected $lastName;
    protected $streetName;
    protected $streetNumber;
    protected $additionalStreetInfo;
    protected $postalCode;
    protected $city;
    protected $region;
    protected $state;
    protected $country;
    protected $company;
    protected $department;
    protected $building;
    protected $apartment;
    protected $pOBox;
    protected $phone;
    protected $mobile;
    protected $email;
    protected $fax;
    protected $additionalAddressInfo;
    protected $externalId;

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
    }
                

    /**
     * @return string
     */
    public function getTitle(): string
    {
        if (is_null($this->title)) {
            $value = $this->raw('title');
            if (!is_null($value)) {
                $this->title = (string)$value;
            } else {
                return '';
            }
        }
        return $this->title;
    }
                

    /**
     * @return string
     */
    public function getSalutation(): string
    {
        if (is_null($this->salutation)) {
            $value = $this->raw('salutation');
            if (!is_null($value)) {
                $this->salutation = (string)$value;
            } else {
                return '';
            }
        }
        return $this->salutation;
    }
                

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        if (is_null($this->firstName)) {
            $value = $this->raw('firstName');
            if (!is_null($value)) {
                $this->firstName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->firstName;
    }
                

    /**
     * @return string
     */
    public function getLastName(): string
    {
        if (is_null($this->lastName)) {
            $value = $this->raw('lastName');
            if (!is_null($value)) {
                $this->lastName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->lastName;
    }
                

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        if (is_null($this->streetName)) {
            $value = $this->raw('streetName');
            if (!is_null($value)) {
                $this->streetName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->streetName;
    }
                

    /**
     * @return string
     */
    public function getStreetNumber(): string
    {
        if (is_null($this->streetNumber)) {
            $value = $this->raw('streetNumber');
            if (!is_null($value)) {
                $this->streetNumber = (string)$value;
            } else {
                return '';
            }
        }
        return $this->streetNumber;
    }
                

    /**
     * @return string
     */
    public function getAdditionalStreetInfo(): string
    {
        if (is_null($this->additionalStreetInfo)) {
            $value = $this->raw('additionalStreetInfo');
            if (!is_null($value)) {
                $this->additionalStreetInfo = (string)$value;
            } else {
                return '';
            }
        }
        return $this->additionalStreetInfo;
    }
                

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        if (is_null($this->postalCode)) {
            $value = $this->raw('postalCode');
            if (!is_null($value)) {
                $this->postalCode = (string)$value;
            } else {
                return '';
            }
        }
        return $this->postalCode;
    }
                

    /**
     * @return string
     */
    public function getCity(): string
    {
        if (is_null($this->city)) {
            $value = $this->raw('city');
            if (!is_null($value)) {
                $this->city = (string)$value;
            } else {
                return '';
            }
        }
        return $this->city;
    }
                

    /**
     * @return string
     */
    public function getRegion(): string
    {
        if (is_null($this->region)) {
            $value = $this->raw('region');
            if (!is_null($value)) {
                $this->region = (string)$value;
            } else {
                return '';
            }
        }
        return $this->region;
    }
                

    /**
     * @return string
     */
    public function getState(): string
    {
        if (is_null($this->state)) {
            $value = $this->raw('state');
            if (!is_null($value)) {
                $this->state = (string)$value;
            } else {
                return '';
            }
        }
        return $this->state;
    }
                

    /**
     * @return string
     */
    public function getCountry(): string
    {
        if (is_null($this->country)) {
            $value = $this->raw('country');
            if (!is_null($value)) {
                $this->country = (string)$value;
            } else {
                return '';
            }
        }
        return $this->country;
    }
                

    /**
     * @return string
     */
    public function getCompany(): string
    {
        if (is_null($this->company)) {
            $value = $this->raw('company');
            if (!is_null($value)) {
                $this->company = (string)$value;
            } else {
                return '';
            }
        }
        return $this->company;
    }
                

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        if (is_null($this->department)) {
            $value = $this->raw('department');
            if (!is_null($value)) {
                $this->department = (string)$value;
            } else {
                return '';
            }
        }
        return $this->department;
    }
                

    /**
     * @return string
     */
    public function getBuilding(): string
    {
        if (is_null($this->building)) {
            $value = $this->raw('building');
            if (!is_null($value)) {
                $this->building = (string)$value;
            } else {
                return '';
            }
        }
        return $this->building;
    }
                

    /**
     * @return string
     */
    public function getApartment(): string
    {
        if (is_null($this->apartment)) {
            $value = $this->raw('apartment');
            if (!is_null($value)) {
                $this->apartment = (string)$value;
            } else {
                return '';
            }
        }
        return $this->apartment;
    }
                

    /**
     * @return string
     */
    public function getPOBox(): string
    {
        if (is_null($this->pOBox)) {
            $value = $this->raw('pOBox');
            if (!is_null($value)) {
                $this->pOBox = (string)$value;
            } else {
                return '';
            }
        }
        return $this->pOBox;
    }
                

    /**
     * @return string
     */
    public function getPhone(): string
    {
        if (is_null($this->phone)) {
            $value = $this->raw('phone');
            if (!is_null($value)) {
                $this->phone = (string)$value;
            } else {
                return '';
            }
        }
        return $this->phone;
    }
                

    /**
     * @return string
     */
    public function getMobile(): string
    {
        if (is_null($this->mobile)) {
            $value = $this->raw('mobile');
            if (!is_null($value)) {
                $this->mobile = (string)$value;
            } else {
                return '';
            }
        }
        return $this->mobile;
    }
                

    /**
     * @return string
     */
    public function getEmail(): string
    {
        if (is_null($this->email)) {
            $value = $this->raw('email');
            if (!is_null($value)) {
                $this->email = (string)$value;
            } else {
                return '';
            }
        }
        return $this->email;
    }
                

    /**
     * @return string
     */
    public function getFax(): string
    {
        if (is_null($this->fax)) {
            $value = $this->raw('fax');
            if (!is_null($value)) {
                $this->fax = (string)$value;
            } else {
                return '';
            }
        }
        return $this->fax;
    }
                

    /**
     * @return string
     */
    public function getAdditionalAddressInfo(): string
    {
        if (is_null($this->additionalAddressInfo)) {
            $value = $this->raw('additionalAddressInfo');
            if (!is_null($value)) {
                $this->additionalAddressInfo = (string)$value;
            } else {
                return '';
            }
        }
        return $this->additionalAddressInfo;
    }
                

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        if (is_null($this->externalId)) {
            $value = $this->raw('externalId');
            if (!is_null($value)) {
                $this->externalId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->externalId;
    }
                
}
