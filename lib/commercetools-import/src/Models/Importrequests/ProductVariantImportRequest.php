<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Productvariants\ProductVariantImportCollection;

interface ProductVariantImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The product variant import resources of this request.</p>
     *
     * @return null|ProductVariantImportCollection
     */
    public function getResources();

    /**
     * @param ?ProductVariantImportCollection $resources
     */
    public function setResources(?ProductVariantImportCollection $resources): void;
}
