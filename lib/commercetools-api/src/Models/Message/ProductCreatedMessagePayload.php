<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductCreatedMessagePayload extends MessagePayload
{
    public const FIELD_PRODUCT_PROJECTION = 'productProjection';

    /**
     * <p>The staged <a href="ctp:api:type:ProductProjection">Product Projection</a> of the <a href="ctp:api:type:Product">Product</a> at the time of creation.</p>
     *

     * @return null|ProductProjection
     */
    public function getProductProjection();

    /**
     * @param ?ProductProjection $productProjection
     */
    public function setProductProjection(?ProductProjection $productProjection): void;
}
