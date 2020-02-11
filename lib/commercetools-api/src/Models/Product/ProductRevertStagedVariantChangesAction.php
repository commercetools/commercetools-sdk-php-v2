<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductRevertStagedVariantChangesAction extends ProductUpdateAction
{

    public const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return null|int
     */
    public function getVariantId();

    public function setVariantId(?int $variantId): void;
}
