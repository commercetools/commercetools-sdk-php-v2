<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Product\ProductProjection;

interface ProductDeletedMessage extends Message {
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    const FIELD_CURRENT_PROJECTION = 'currentProjection';

    /**
     * @return array
     */
    public function getRemovedImageUrls();

    /**
     * @return ProductProjection
     */
    public function getCurrentProjection();

    /**
     * @param array $removedImageUrls
     * @return $this
     */
    public function setRemovedImageUrls($removedImageUrls);

    /**
     * @param ProductProjection $currentProjection
     * @return $this
     */
    public function setCurrentProjection(ProductProjection $currentProjection);

}
