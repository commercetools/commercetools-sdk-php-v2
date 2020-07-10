<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Categories\CategoryImportCollection;

interface CategoryImportRequest extends ImportRequest
{

    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The category import resources of this request.</p>
     *
     * @return null|CategoryImportCollection
     */
    public function getResources();

    public function setResources(?CategoryImportCollection $resources): void;
}
