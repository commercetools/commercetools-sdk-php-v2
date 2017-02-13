<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Channel extends Resource {
    protected $key;
    protected $roles;
    protected $name;
    protected $description;
    protected $address;
    protected $reviewRatingStatistics;
    protected $custom;
    protected $geoLocation;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return array
     */
    public function getRoles(): array
    {
        if (is_null($this->roles)) {
            $value = $this->raw('roles');
            if (!is_null($value)) {
                $this->roles = $value;
            } else {
                return [];
            }
        }
        return $this->roles;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        if (is_null($this->address)) {
            $value = $this->raw('address');
            if (!is_null($value)) {
                $this->address = Mapper::map($value, Address::class);
            } else {
                return Mapper::map([], Address::class);
            }
        }
        return $this->address;
    }
                

    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics(): ReviewRatingStatistics
    {
        if (is_null($this->reviewRatingStatistics)) {
            $value = $this->raw('reviewRatingStatistics');
            if (!is_null($value)) {
                $this->reviewRatingStatistics = Mapper::map($value, ReviewRatingStatistics::class);
            } else {
                return Mapper::map([], ReviewRatingStatistics::class);
            }
        }
        return $this->reviewRatingStatistics;
    }
                

    /**
     * @return CustomFields
     */
    public function getCustom(): CustomFields
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFields::class);
            } else {
                return Mapper::map([], CustomFields::class);
            }
        }
        return $this->custom;
    }
                

    /**
     * @return array
     */
    public function getGeoLocation(): array
    {
        if (is_null($this->geoLocation)) {
            $value = $this->raw('geoLocation');
            if (!is_null($value)) {
                $this->geoLocation = $value;
            } else {
                return [];
            }
        }
        return $this->geoLocation;
    }
                
}
