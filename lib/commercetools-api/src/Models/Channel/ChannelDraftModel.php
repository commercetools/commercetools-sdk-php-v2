<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressModel;
use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\GeoJsonModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChannelDraftModel extends JsonObjectModel implements ChannelDraft
{
    /**

     * @var ?string
     */
    protected $key;

    /**

     * @var ?array
     */
    protected $roles;

    /**

     * @var ?LocalizedString
     */
    protected $name;

    /**

     * @var ?LocalizedString
     */
    protected $description;

    /**

     * @var ?BaseAddress
     */
    protected $address;

    /**

     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**

     * @var ?GeoJson
     */
    protected $geoLocation;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?array $roles = null,
        ?LocalizedString $name = null,
        ?LocalizedString $description = null,
        ?BaseAddress $address = null,
        ?CustomFieldsDraft $custom = null,
        ?GeoJson $geoLocation = null
    ) {
        $this->key = $key;
        $this->roles = $roles;
        $this->name = $name;
        $this->description = $description;
        $this->address = $address;
        $this->custom = $custom;
        $this->geoLocation = $geoLocation;
    }

    /**
     * <p>User-defined unique identifier for the Channel.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Roles of the Channel.
     * Each channel must have at least one role.
     * If not specified, then <code>InventorySupply</code> is assigned by default.</p>
     *

     * @return null|array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->roles = $data;
        }

        return $this->roles;
    }

    /**
     * <p>Name of the Channel.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Description of the Channel.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>Address where the Channel is located.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = BaseAddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * <p>Custom fields defined for the Channel.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>GeoJSON geometry object encoding the geo location of the Channel.
     * Currently, only the <a href="ctp:api:type:GeoJsonPoint">Point</a> type is supported.</p>
     *

     * @return null|GeoJson
     */
    public function getGeoLocation()
    {
        if (is_null($this->geoLocation)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_GEO_LOCATION);
            if (is_null($data)) {
                return null;
            }

            $this->geoLocation = GeoJsonModel::of($data);
        }

        return $this->geoLocation;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?GeoJson $geoLocation
     */
    public function setGeoLocation(?GeoJson $geoLocation): void
    {
        $this->geoLocation = $geoLocation;
    }
}
