<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ImportSink extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE_TYPE = 'resourceType';
    public const FIELD_VERSION = 'version';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>User-defined unique identifier for the ImportSink.
     * Keys can only contain alphanumeric characters (a-Z, 0-9), underscores and hyphens (_, -).</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The <a href="#importresourcetype">resource type</a> the ImportSink is able to handle.
     * If not present, the ImportSink is able to import all of the supported <a href="#importresourcetype">ImportResourceTypes</a>.</p>
     *
     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>The version of the ImportSink.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The time when the ImportSink was created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>The last time when the ImportSink was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

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
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
