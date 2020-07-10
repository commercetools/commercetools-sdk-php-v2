<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Productvariants\ProductVariantPatchCollection;

interface ProductVariantPatchRequest extends ImportRequest
{

    public const FIELD_PATCHES = 'patches';

    /**
     * <p>The product variant patches of this request.</p>
     *
     * @return null|ProductVariantPatchCollection
     */
    public function getPatches();

    public function setPatches(?ProductVariantPatchCollection $patches): void;
}
