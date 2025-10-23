<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductVariantExclusion extends JsonObject
{

    public const FIELD_SKUS = 'skus';

    /**
     * <p>Non-empty array of SKUs representing Product Variants to be included in the Product Selection with <code>IndividualExclusion</code> <a href="ctp:api:type:ProductSelectionMode">ProductSelectionMode</a>.</p>
     *

     * @return null|array
     */
    public function getSkus();

    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void;
}
