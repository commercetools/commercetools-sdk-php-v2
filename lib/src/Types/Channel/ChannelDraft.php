<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Address;

interface ChannelDraft extends JsonObject {
    const FIELD_KEY = 'key';
    const FIELD_ROLES = 'roles';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ADDRESS = 'address';
    const FIELD_CUSTOM = 'custom';
    const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return array
     */
    public function getRoles();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return Address
     */
    public function getAddress();

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return mixed
     */
    public function getGeoLocation();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address);

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @param mixed $geoLocation
     * @return $this
     */
    public function setGeoLocation($geoLocation);

    /**
     * @return GeoJsonPoint
     */
    public function getGeoLocationAsGeoJsonPoint();

    /**
     * @return GeoJson
     */
    public function getGeoLocationAsGeoJson();

}
