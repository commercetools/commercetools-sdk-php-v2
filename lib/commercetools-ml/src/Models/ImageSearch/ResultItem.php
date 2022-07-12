<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Ml\Models\Common\ProductVariantCollection;

interface ResultItem extends JsonObject
{
    public const FIELD_IMAGE_URL = 'imageUrl';
    public const FIELD_PRODUCT_VARIANTS = 'productVariants';

    /**
     * <p>The URL of the image.</p>
     *

     * @return null|string
     */
    public function getImageUrl();

    /**
     * <p>An array of product variants containing the image URL.</p>
     *

     * @return null|ProductVariantCollection
     */
    public function getProductVariants();

    /**
     * @param ?string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void;

    /**
     * @param ?ProductVariantCollection $productVariants
     */
    public function setProductVariants(?ProductVariantCollection $productVariants): void;
}
