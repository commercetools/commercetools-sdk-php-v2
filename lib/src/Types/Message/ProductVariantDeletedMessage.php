<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Product\ProductVariant;

interface ProductVariantDeletedMessage extends Message
{
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    const FIELD_VARIANT = 'variant';

    /**
     * @return array
     */
    public function getRemovedImageUrls();

    /**
     * @return ProductVariant
     */
    public function getVariant();

    /**
     * @param array $removedImageUrls
     * @return $this
     */
    public function setRemovedImageUrls($removedImageUrls);

    /**
     * @param ProductVariant $variant
     * @return $this
     */
    public function setVariant(ProductVariant $variant);

}
