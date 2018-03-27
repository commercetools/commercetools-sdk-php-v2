<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Builder\ChannelUpdateBuilder;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\Address;
use Commercetools\Types\Review\ReviewRatingStatistics;
use Commercetools\Types\Common\Resource;

class ChannelModel extends ResourceModel implements Channel {
    /**
     * @var string
     */
    protected $key;
    /**
     * @var array
     */
    protected $roles;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var Address
     */
    protected $address;
    /**
     * @var ReviewRatingStatistics
     */
    protected $reviewRatingStatistics;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var mixed
     */
    protected $geoLocation;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(Channel::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(Channel::FIELD_ROLES);
            $value = (array)$value;
            $this->roles = $value;
        }
        return $this->roles;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(Channel::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(Channel::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            $value = $this->raw(Channel::FIELD_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->address = $value;
        }
        return $this->address;
    }
    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics()
    {
        if (is_null($this->reviewRatingStatistics)) {
            $value = $this->raw(Channel::FIELD_REVIEW_RATING_STATISTICS);
            if (is_null($value)) {
                return $this->mapData(ReviewRatingStatistics::class, null);
            }
            $value = $this->mapData(ReviewRatingStatistics::class, $value);

            $this->reviewRatingStatistics = $value;
        }
        return $this->reviewRatingStatistics;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(Channel::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return mixed
     */
    public function getGeoLocation()
    {
        if (is_null($this->geoLocation)) {
            $value = $this->raw(Channel::FIELD_GEO_LOCATION);
            $this->geoLocation = $value;
        }
        return $this->geoLocation;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }
    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }
    /**
     * @param ReviewRatingStatistics $reviewRatingStatistics
     * @return $this
     */
    public function setReviewRatingStatistics(ReviewRatingStatistics $reviewRatingStatistics)
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param $geoLocation
     * @return $this
     */
    public function setGeoLocation($geoLocation)
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    /**
     * @return GeoJsonPoint
     */
    public function getGeoLocationAsGeoJsonPoint()
    {
        return null;
    }

    /**
     * @return GeoJson
     */
    public function getGeoLocationAsGeoJson()
    {
        return null;
    }


    /**
     * @return ChannelUpdateBuilder
     */
    public function update()
    {
        $builder = new ChannelUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
