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
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>User-defined unique identifier of the ImportContainer.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The <a href="ctp:import:type:ImportResourceType">resource type</a> the ImportContainer supports. If not present, the ImportContainer can import all of the supported <a href="ctp:import:type:ImportResourceType">ImportResourceTypes</a>.</p>
     *

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>Current version of the ImportContainer.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the ImportContainer was created.</p>
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
