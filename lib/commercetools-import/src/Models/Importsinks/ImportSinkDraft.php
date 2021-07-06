<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportSinkDraft extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE_TYPE = 'resourceType';

    /**
     * <p>The version of the ImportSinkDraft.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the ImportSink.
     * Keys can only contain alphanumeric characters (a-Z, 0-9), underscores and hyphens (_, -).</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The <a href="#importresourcetype">resource type</a> to be imported.
     * If not given, the ImportSink is able to import all of the supported <a href="#importresourcetype">ImportResourceTypes</a>.</p>
     *
     * @return null|string
     */
    public function getResourceType();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;
}
