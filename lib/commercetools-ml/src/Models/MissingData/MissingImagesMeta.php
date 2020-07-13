<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingImagesMeta extends JsonObject
{
    public const FIELD_PRODUCT_LEVEL = 'productLevel';
    public const FIELD_VARIANT_LEVEL = 'variantLevel';
    public const FIELD_THRESHOLD = 'threshold';

    /**
     * @return null|MissingImagesProductLevel
     */
    public function getProductLevel();

    /**
     * @return null|MissingImagesVariantLevel
     */
    public function getVariantLevel();

    /**
     * <p>The minimum number of images a product variant must have. Anything below this value is considered a product variant with missing images.</p>
     *
     * @return null|int
     */
    public function getThreshold();

    /**
     * @param ?MissingImagesProductLevel $productLevel
     */
    public function setProductLevel(?MissingImagesProductLevel $productLevel): void;

    /**
     * @param ?MissingImagesVariantLevel $variantLevel
     */
    public function setVariantLevel(?MissingImagesVariantLevel $variantLevel): void;

    /**
     * @param ?int $threshold
     */
    public function setThreshold(?int $threshold): void;
}
