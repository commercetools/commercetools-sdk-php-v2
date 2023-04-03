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

interface ProductAssignmentMissingError extends ErrorObject
{
    public const FIELD_PRODUCT = 'product';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>For Product Selection of type Individual, the message is:</p>
     * <p><code>&quot;A Product Variant Selection can only be set for a Product that has previously been added to the Product Selection.&quot;</code></p>
     * <p>For Product Selection of type Individual Exclusion, the message is:</p>
     * <p><code>&quot;A Variant Exclusion can only be set for a Product that has previously been added to the Product Selection of type Individual Exclusion.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Product">Product</a> for which the error was returned.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;
}
