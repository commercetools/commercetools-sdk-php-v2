<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ZoneDraftModel extends JsonObjectModel implements ZoneDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $description;

    /**
     * @var ?LocationCollection
     */
    protected $locations;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $name = null,
        ?string $description = null,
        ?LocationCollection $locations = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->description = $description;
        $this->locations = $locations;
    }

    /**
     * <p>User-defined unique identifier for the Zone.</p>
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
     * <p>Name of the Zone.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Description of the Zone.</p>
     *
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * <p>List of locations that belong to the Zone.</p>
     *
     * @return null|LocationCollection
     */
    public function getLocations()
    {
        if (is_null($this->locations)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_LOCATIONS);
            if (is_null($data)) {
                return null;
            }
            $this->locations = LocationCollection::fromArray($data);
        }

        return $this->locations;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?LocationCollection $locations
     */
    public function setLocations(?LocationCollection $locations): void
    {
        $this->locations = $locations;
    }
}
