<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportContainerDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE_TYPE = 'resourceType';
    public const FIELD_RETENTION_POLICY = 'retentionPolicy';

    /**
     * <p>User-defined unique identifier of the ImportContainer.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The <a href="#importresourcetype">resource type</a> to be imported.
     * If not given, the ImportContainer is able to import all of the supported <a href="#importresourcetype">ImportResourceTypes</a>.</p>
     *

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>Set a retention policy to automatically delete the ImportContainer after a defined period.</p>
     *

     * @return null|RetentionPolicy
     */
    public function getRetentionPolicy();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;

    /**
     * @param ?RetentionPolicy $retentionPolicy
     */
    public function setRetentionPolicy(?RetentionPolicy $retentionPolicy): void;
}
