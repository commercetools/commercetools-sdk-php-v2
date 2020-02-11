<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
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
     * @var ?Address
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


    public function __construct(
        string $key = null,
        array $roles = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        Address $address = null,
        CustomFieldsDraft $custom = null,
        GeoJson $geoLocation = null
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
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ChannelDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>If not specified, then channel will get InventorySupply role by default</p>
     *
     * @return null|array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ChannelDraft::FIELD_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->roles = $data;
        }

        return $this->roles;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ChannelDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ChannelDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ChannelDraft::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ChannelDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|GeoJson
     */
    public function getGeoLocation()
    {
        if (is_null($this->geoLocation)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ChannelDraft::FIELD_GEO_LOCATION);
            if (is_null($data)) {
                return null;
            }

            $this->geoLocation = GeoJsonModel::of($data);
        }

        return $this->geoLocation;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setGeoLocation(?GeoJson $geoLocation): void
    {
        $this->geoLocation = $geoLocation;
    }
}
