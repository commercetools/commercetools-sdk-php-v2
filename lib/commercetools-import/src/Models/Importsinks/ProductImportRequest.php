<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Import\Models\Products\ProductImportCollection;

interface ProductImportRequest extends ImportRequest
{
    const FIELD_RESOURCES = 'resources';

    /**
     * <p>The individual products to import.</p>.
     *
     * @return null|ProductImportCollection
     */
    public function getResources();

    public function setResources(?ProductImportCollection $resources): void;
}
