<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Import\Models\Productvariants\ProductVariantPatchCollection;

interface ProductVariantPatchRequest extends ImportRequest
{
    const FIELD_PATCHES = 'patches';

    /**
     * <p>The individual product variant patches.</p>.
     *
     * @return null|ProductVariantPatchCollection
     */
    public function getPatches();

    public function setPatches(?ProductVariantPatchCollection $patches): void;
}
