<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Product\ProductProjection;

interface ProductCreatedMessagePayload extends MessagePayload
{

    public const FIELD_PRODUCT_PROJECTION = 'productProjection';

    /**
     * @return null|ProductProjection
     */
    public function getProductProjection();

    public function setProductProjection(?ProductProjection $productProjection): void;
}
