<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Address;

class ChannelDraftModel extends JsonObjectModel implements ChannelDraft {
    /**
     * @var string
     */
    protected $key;
    /**
     * @var ChannelRoleEnumCollection
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
     * @var CustomFieldsDraft
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
            $value = $this->raw(ChannelDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return ChannelRoleEnumCollection
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(ChannelDraft::FIELD_ROLES);
            if (is_null($value)) {
                return $this->mapData(ChannelRoleEnumCollection::class, null);
            }
            $value = $this->mapData(ChannelRoleEnumCollection::class, $value);
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
            $value = $this->raw(ChannelDraft::FIELD_NAME);
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
            $value = $this->raw(ChannelDraft::FIELD_DESCRIPTION);
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
            $value = $this->raw(ChannelDraft::FIELD_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->address = $value;
        }
        return $this->address;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(ChannelDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

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
            $value = $this->raw(ChannelDraft::FIELD_GEO_LOCATION);
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
     * @param ChannelRoleEnumCollection $roles
     * @return $this
     */
    public function setRoles(ChannelRoleEnumCollection $roles)
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
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
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

}
