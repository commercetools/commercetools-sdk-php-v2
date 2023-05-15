<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Types\TypeImportCollection;

interface TypeImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The type import resources of this request.</p>
     *

     * @return null|TypeImportCollection
     */
    public function getResources();

    /**
     * @param ?TypeImportCollection $resources
     */
    public function setResources(?TypeImportCollection $resources): void;
}
