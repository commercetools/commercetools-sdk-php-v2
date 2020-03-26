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

interface MissingImages extends JsonObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_IMAGE_COUNT = 'imageCount';

    /**
     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>ID of the variant</p>
     *
     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Number of images the variant contains.</p>
     *
     * @return null|int
     */
    public function getImageCount();

    public function setProduct(?ProductReference $product): void;

    public function setVariantId(?int $variantId): void;

    public function setImageCount(?int $imageCount): void;
}
