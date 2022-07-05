<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Productvariants\ProductVariantPatchCollection;

interface ProductVariantPatchRequest extends ImportRequest
{
    public const FIELD_PATCHES = 'patches';

    /**
     * <p>The product variant patches of this request.</p>
     *

     * @return null|ProductVariantPatchCollection
     */
    public function getPatches();

    /**
     * @param ?ProductVariantPatchCollection $patches
     */
    public function setPatches(?ProductVariantPatchCollection $patches): void;
}
