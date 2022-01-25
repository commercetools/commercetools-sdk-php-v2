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

interface ProductSelectionProductAddedMessagePayload extends MessagePayload
{
    public const FIELD_PRODUCT = 'product';

    /**
     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;
}
