<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\ProductSelections\ProductSelectionImportCollection;

interface ProductSelectionImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The Product Selection import resources of this request.</p>
     *

     * @return null|ProductSelectionImportCollection
     */
    public function getResources();

    /**
     * @param ?ProductSelectionImportCollection $resources
     */
    public function setResources(?ProductSelectionImportCollection $resources): void;
}
