<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantExclusion extends JsonObject
{
    public const FIELD_SKUS = 'skus';

    /**
     * <p>List of SKUs to be excluded.</p>
     *

     * @return null|array
     */
    public function getSkus();

    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void;
}
