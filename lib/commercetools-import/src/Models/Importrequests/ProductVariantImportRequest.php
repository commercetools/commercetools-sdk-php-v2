<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Productvariants\ProductVariantImportCollection;

interface ProductVariantImportRequest extends ImportRequest
{

    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The product variant import resources of this request.</p>
     *
     * @return null|ProductVariantImportCollection
     */
    public function getResources();

    public function setResources(?ProductVariantImportCollection $resources): void;
}
