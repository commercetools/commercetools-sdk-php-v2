<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\ProductTailoring\ProductTailoringImportCollection;

interface ProductTailoringImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The Product Tailoring import resources of this request.</p>
     *

     * @return null|ProductTailoringImportCollection
     */
    public function getResources();

    /**
     * @param ?ProductTailoringImportCollection $resources
     */
    public function setResources(?ProductTailoringImportCollection $resources): void;
}
