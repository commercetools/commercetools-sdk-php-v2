<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ImportContainer extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE_TYPE = 'resourceType';
    public const FIELD_VERSION = 'version';
    public const FIELD_RETENTION_POLICY = 'retentionPolicy';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_EXPIRES_AT = 'expiresAt';

    /**
     * <p>User-defined unique identifier for the ImportContainer.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The <a href="#importresourcetype">resource type</a> the ImportContainer is able to handle.
     * If not present, the ImportContainer is able to import all of the supported <a href="#importresourcetype">ImportResourceTypes</a>.</p>
     *

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>The version of the ImportContainer.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The retention policy of the ImportContainer.</p>
     *

     * @return null|RetentionPolicy
     */
    public function getRetentionPolicy();

    /**
     * <p>Date and time (UTC) the ImportContainer was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the ImportContainer was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Date and time (UTC) the ImportContainer is automatically deleted. Only present if a <code>retentionPolicy</code> is set. ImportContainers without <code>expiresAt</code> are permanent until <a href="#delete-importcontainer">manually deleted</a>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?RetentionPolicy $retentionPolicy
     */
    public function setRetentionPolicy(?RetentionPolicy $retentionPolicy): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;
}
