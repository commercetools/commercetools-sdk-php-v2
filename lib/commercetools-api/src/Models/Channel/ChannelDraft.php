<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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
     * <p>User-defined unique identifier for the Channel.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Roles of the Channel.
     * Each channel must have at least one role.
     * If not specified, then <code>InventorySupply</code> is assigned by default.</p>
     *

     * @return null|array
     */
    public function getRoles();

    /**
     * <p>Name of the Channel.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the Channel.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Address where the Channel is located.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * <p>Custom fields defined for the Channel.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>GeoJSON geometry object encoding the geo location of the Channel.
     * Currently, only the <a href="ctp:api:type:GeoJsonPoint">Point</a> type is supported.</p>
     *

     * @return null|GeoJson
     */
    public function getGeoLocation();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?GeoJson $geoLocation
     */
    public function setGeoLocation(?GeoJson $geoLocation): void;
}
