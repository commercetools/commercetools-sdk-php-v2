<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantSelectionInclusion extends ProductVariantSelection
{
    public const FIELD_SKUS = 'skus';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Non-empty array of SKUs representing Product Variants to be included into the Product Selection.</p>
     *
     * @return null|array
     */
    public function getSkus();

    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void;
}
