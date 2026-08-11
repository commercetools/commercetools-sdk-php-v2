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
     * <p>The resource type the ImportContainer will accept.
     * If not specified, the ImportContainer can import all of the supported ImportResourceTypes.</p>
     *

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>Optional. When set, defines how long the ImportContainer is kept before automatic deletion.
     * When omitted, the ImportContainer receives the default <strong>72-hour</strong> lifetime.</p>
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
