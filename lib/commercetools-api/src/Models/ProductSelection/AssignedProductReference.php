<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssignedProductReference extends JsonObject
{
    public const FIELD_PRODUCT = 'product';

    /**
     * <p>Reference to a Product that is assigned to the ProductSelection.</p>
     *
     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;
}
