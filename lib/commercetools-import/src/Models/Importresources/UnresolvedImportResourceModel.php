<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importresources;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;

final class UnresolvedImportResourceModel extends JsonObjectModel implements UnresolvedImportResource
{
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?string
     */
    protected $resourceKey;

    /**
     * @var ?string
     */
    protected $resourceAsString;

    /**
     * @var ?string
     */
    protected $importSinkKey;

    /**
     * @var ?string
     */
    protected $resourceType;

    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $resourceKey = null,
        string $resourceAsString = null,
        string $importSinkKey = null,
        string $resourceType = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->resourceKey = $resourceKey;
        $this->resourceAsString = $resourceAsString;
        $this->importSinkKey = $importSinkKey;
        $this->resourceType = $resourceType;
    }

    /**
     * <p>The creation time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UnresolvedImportResource::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>The last modification time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UnresolvedImportResource::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>The key of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceKey()
    {
        if (is_null($this->resourceKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UnresolvedImportResource::FIELD_RESOURCE_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->resourceKey = (string) $data;
        }

        return $this->resourceKey;
    }

    /**
     * <p>the resource which could not successfull imported</p>.
     *
     * @return null|string
     */
    public function getResourceAsString()
    {
        if (is_null($this->resourceAsString)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UnresolvedImportResource::FIELD_RESOURCE_AS_STRING);
            if (is_null($data)) {
                return null;
            }
            $this->resourceAsString = (string) $data;
        }

        return $this->resourceAsString;
    }

    /**
     * <p>the key of the import sink</p>.
     *
     * @return null|string
     */
    public function getImportSinkKey()
    {
        if (is_null($this->importSinkKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UnresolvedImportResource::FIELD_IMPORT_SINK_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->importSinkKey = (string) $data;
        }

        return $this->importSinkKey;
    }

    /**
     * <p>The type of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(UnresolvedImportResource::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setResourceKey(?string $resourceKey): void
    {
        $this->resourceKey = $resourceKey;
    }

    public function setResourceAsString(?string $resourceAsString): void
    {
        $this->resourceAsString = $resourceAsString;
    }

    public function setImportSinkKey(?string $importSinkKey): void
    {
        $this->importSinkKey = $importSinkKey;
    }

    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[UnresolvedImportResource::FIELD_CREATED_AT]) && $data[UnresolvedImportResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[UnresolvedImportResource::FIELD_CREATED_AT] = $data[UnresolvedImportResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[UnresolvedImportResource::FIELD_LAST_MODIFIED_AT]) && $data[UnresolvedImportResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[UnresolvedImportResource::FIELD_LAST_MODIFIED_AT] = $data[UnresolvedImportResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
