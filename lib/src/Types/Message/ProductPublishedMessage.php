<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Product\ProductProjection;

interface ProductPublishedMessage extends Message
{
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    const FIELD_PRODUCT_PROJECTION = 'productProjection';
    const FIELD_SCOPE = 'scope';

    /**
     * @return array
     */
    public function getRemovedImageUrls();

    /**
     * @return ProductProjection
     */
    public function getProductProjection();

    /**
     * @return string
     */
    public function getScope();

    /**
     * @param array $removedImageUrls
     * @return $this
     */
    public function setRemovedImageUrls($removedImageUrls);

    /**
     * @param ProductProjection $productProjection
     * @return $this
     */
    public function setProductProjection(ProductProjection $productProjection);

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope(string $scope);

}
