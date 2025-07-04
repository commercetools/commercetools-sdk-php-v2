<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ImportContainer>
 */
final class ImportContainerBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $resourceType;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var null|RetentionPolicy|RetentionPolicyBuilder
     */
    private $retentionPolicy;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**
     * <p>User-defined unique identifier for the ImportContainer.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The <a href="#importresourcetype">resource type</a> the ImportContainer is able to handle.
     * If not present, the ImportContainer is able to import all of the supported <a href="#importresourcetype">ImportResourceTypes</a>.</p>
     *

     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * <p>The version of the ImportContainer.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The retention policy of the ImportContainer.</p>
     *

     * @return null|RetentionPolicy
     */
    public function getRetentionPolicy()
    {
        return $this->retentionPolicy instanceof RetentionPolicyBuilder ? $this->retentionPolicy->build() : $this->retentionPolicy;
    }

    /**
     * <p>Date and time (UTC) the ImportContainer was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the ImportContainer was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Date and time (UTC) the ImportContainer is automatically deleted. Only present if a <code>retentionPolicy</code> is set. ImportContainers without <code>expiresAt</code> are permanent until <a href="#delete-importcontainer">manually deleted</a>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $resourceType
     * @return $this
     */
    public function withResourceType(?string $resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?RetentionPolicy $retentionPolicy
     * @return $this
     */
    public function withRetentionPolicy(?RetentionPolicy $retentionPolicy)
    {
        $this->retentionPolicy = $retentionPolicy;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     * @return $this
     */
    public function withExpiresAt(?DateTimeImmutable $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * @deprecated use withRetentionPolicy() instead
     * @return $this
     */
    public function withRetentionPolicyBuilder(?RetentionPolicyBuilder $retentionPolicy)
    {
        $this->retentionPolicy = $retentionPolicy;

        return $this;
    }

    public function build(): ImportContainer
    {
        return new ImportContainerModel(
            $this->key,
            $this->resourceType,
            $this->version,
            $this->retentionPolicy instanceof RetentionPolicyBuilder ? $this->retentionPolicy->build() : $this->retentionPolicy,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->expiresAt
        );
    }

    public static function of(): ImportContainerBuilder
    {
        return new self();
    }
}
