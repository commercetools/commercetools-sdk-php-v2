<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;

interface ChannelDraft extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_ROLES = 'roles';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ADDRESS = 'address';
    const FIELD_CUSTOM = 'custom';
    const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|array
     */
    public function getRoles();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|Address
     */
    public function getAddress();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|GeoJson
     */
    public function getGeoLocation();

    public function setKey(?string $key): void;

    public function setRoles(?array $roles): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setAddress(?Address $address): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setGeoLocation(?GeoJson $geoLocation): void;
}
