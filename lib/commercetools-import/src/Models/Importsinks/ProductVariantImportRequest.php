<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Import\Models\Productvariants\ProductVariantImportCollection;

interface ProductVariantImportRequest extends ImportRequest
{
    const FIELD_RESOURCES = 'resources';

    /**
     * <p>The individual product variants to import.</p>.
     *
     * @return null|ProductVariantImportCollection
     */
    public function getResources();

    public function setResources(?ProductVariantImportCollection $resources): void;
}
