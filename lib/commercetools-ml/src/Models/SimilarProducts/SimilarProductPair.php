<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SimilarProductPair extends JsonObject
{
    public const FIELD_CONFIDENCE = 'confidence';
    public const FIELD_PRODUCTS = 'products';

    /**
     * <p>The probability of product similarity.</p>
     *
     * @return null|int
     */
    public function getConfidence();

    /**
     * @return null|SimilarProductCollection
     */
    public function getProducts();

    public function setConfidence(?int $confidence): void;

    public function setProducts(?SimilarProductCollection $products): void;
}
