<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionProductRemovedMessagePayload extends MessagePayload
{
    public const FIELD_PRODUCT = 'product';

    /**
     * <p><a href="ctp:api:type:Product">Product</a> that was removed from the Product Selection.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;
}
