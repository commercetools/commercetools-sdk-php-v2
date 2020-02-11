<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface ChannelDraft extends JsonObject
{

    public const FIELD_KEY = 'key';
    public const FIELD_ROLES = 'roles';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * <p>If not specified, then channel will get InventorySupply role by default</p>
     *
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
     * <p>The custom fields.</p>
     *
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
