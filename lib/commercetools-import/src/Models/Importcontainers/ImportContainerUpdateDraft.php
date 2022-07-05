<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportContainerUpdateDraft extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_RESOURCE_TYPE = 'resourceType';

    /**
     * <p>Current version of the ImportContainer.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The <a href="#importresourcetype">resource type</a> to be imported.
     * If not given, the ImportContainer is able to import all of the supported <a href="#importresourcetype">ImportResourceTypes</a>.</p>
     *

     * @return null|string
     */
    public function getResourceType();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;
}
