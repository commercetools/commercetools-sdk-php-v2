<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLProductAssignmentMissingError extends GraphQLErrorObject
{
    public const FIELD_PRODUCT = 'product';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Product">Product</a> for which the error was returned.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;
}
