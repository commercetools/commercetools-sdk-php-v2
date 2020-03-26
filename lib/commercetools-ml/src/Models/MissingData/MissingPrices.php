<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Ml\Models\Common\ProductReference;

interface MissingPrices extends JsonObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>Id of the <code>ProductVariant</code>.</p>
     *
     * @return null|int
     */
    public function getVariantId();

    public function setProduct(?ProductReference $product): void;

    public function setVariantId(?int $variantId): void;
}
