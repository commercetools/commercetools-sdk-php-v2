<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ImportContainerModel extends JsonObjectModel implements ImportContainer
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $resourceType;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?RetentionPolicy
     */
    protected $retentionPolicy;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $expiresAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $resourceType = null,
        ?int $version = null,
        ?RetentionPolicy $retentionPolicy = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?DateTimeImmutable $expiresAt = null
    ) {
        $this->key = $key;
        $this->resourceType = $resourceType;
        $this->version = $version;
        $this->retentionPolicy = $retentionPolicy;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->expiresAt = $expiresAt;
    }

    /**
     * <p>User-defined unique identifier of the ImportContainer.</p>
     *
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
     * <p>The <a href="ctp:import:type:ImportResourceType">resource type</a> the ImportContainer supports. If not present, the ImportContainer can import all of the supported <a href="ctp:import:type:ImportResourceType">ImportResourceTypes</a>.</p>
     *
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
    }

    /**
     * <p>Current version of the ImportContainer.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>The retention policy of the ImportContainer.</p>
     *
     *
     * @return null|RetentionPolicy
     */
    public function getRetentionPolicy()
    {
        if (is_null($this->retentionPolicy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RETENTION_POLICY);
            if (is_null($data)) {
                return null;
            }
            $className = RetentionPolicyModel::resolveDiscriminatorClass($data);
            $this->retentionPolicy = $className::of($data);
        }

        return $this->retentionPolicy;
    }

    /**
     * <p>Date and time (UTC) the ImportContainer was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
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
     * <p>Date and time (UTC) the ImportContainer was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
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
     * <p>Date and time (UTC) the ImportContainer is automatically deleted. Only present if a <code>retentionPolicy</code> is set. ImportContainers without <code>expiresAt</code> are permanent until <a href="#delete-importcontainer">manually deleted</a>.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        if (is_null($this->expiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXPIRES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->expiresAt = $data;
        }

        return $this->expiresAt;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?RetentionPolicy $retentionPolicy
     */
    public function setRetentionPolicy(?RetentionPolicy $retentionPolicy): void
    {
        $this->retentionPolicy = $retentionPolicy;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ImportContainer::FIELD_CREATED_AT]) && $data[ImportContainer::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ImportContainer::FIELD_CREATED_AT] = $data[ImportContainer::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ImportContainer::FIELD_LAST_MODIFIED_AT]) && $data[ImportContainer::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ImportContainer::FIELD_LAST_MODIFIED_AT] = $data[ImportContainer::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ImportContainer::FIELD_EXPIRES_AT]) && $data[ImportContainer::FIELD_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[ImportContainer::FIELD_EXPIRES_AT] = $data[ImportContainer::FIELD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
