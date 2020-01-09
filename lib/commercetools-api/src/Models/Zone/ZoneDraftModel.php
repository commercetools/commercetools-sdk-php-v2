<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObjectModel;
use stdClass;

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

    public function __construct(
        string $key = null,
        string $name = null,
        string $description = null,
        LocationCollection $locations = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->description = $description;
        $this->locations = $locations;
    }

    /**
     * <p>User-specific unique identifier for a zone.
     * Must be unique across a project.
     * The field can be reset using the Set Key UpdateAction.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ZoneDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ZoneDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ZoneDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * @return null|LocationCollection
     */
    public function getLocations()
    {
        if (is_null($this->locations)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ZoneDraft::FIELD_LOCATIONS);
            if (is_null($data)) {
                return null;
            }
            $this->locations = LocationCollection::fromArray($data);
        }

        return $this->locations;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setLocations(?LocationCollection $locations): void
    {
        $this->locations = $locations;
    }
}
