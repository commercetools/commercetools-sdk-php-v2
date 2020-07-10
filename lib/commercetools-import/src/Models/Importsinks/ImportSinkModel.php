<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsinks;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

/**
 * @internal
 */
final class ImportSinkModel extends JsonObjectModel implements ImportSink
{

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $resourceType;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;


    public function __construct(
        string $key = null,
        string $resourceType = null,
        int $version = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null
    ) {
        $this->key = $key;
        $this->resourceType = $resourceType;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;

    }

    /**
     * <p>The unique key of the import sink.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSink::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The type of import resource sent to this import sink.
     * You can only send one resource type per import sink.</p>
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSink::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
    }

    /**
     * <p>The version of this resource.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportSink::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>When the import sink was created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSink::FIELD_CREATED_AT);
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
     * <p>When the import sink was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSink::FIELD_LAST_MODIFIED_AT);
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

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ImportSink::FIELD_CREATED_AT]) && $data[ImportSink::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ImportSink::FIELD_CREATED_AT] = $data[ImportSink::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ImportSink::FIELD_LAST_MODIFIED_AT]) && $data[ImportSink::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ImportSink::FIELD_LAST_MODIFIED_AT] = $data[ImportSink::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

}
