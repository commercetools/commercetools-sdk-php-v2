<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Import\Models\Producttypes\ProductTypeImportCollection;

interface ProductTypeImportRequest extends ImportRequest
{
    const FIELD_RESOURCES = 'resources';

    /**
     * <p>The individual product types to import.</p>.
     *
     * @return null|ProductTypeImportCollection
     */
    public function getResources();

    public function setResources(?ProductTypeImportCollection $resources): void;
}
