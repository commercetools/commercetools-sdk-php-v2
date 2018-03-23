<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Product\ProductProjection;

interface ProductCreatedMessage extends Message {
    const FIELD_PRODUCT_PROJECTION = 'productProjection';

    /**
     * @return ProductProjection
     */
    public function getProductProjection();

    /**
     * @param ProductProjection $productProjection
     * @return $this
     */
    public function setProductProjection(ProductProjection $productProjection);

}
