<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SimilarProductPair>
 */
final class SimilarProductPairBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $confidence;

    /**
     * @var ?SimilarProductCollection
     */
    private $products;

    /**
     * <p>The probability of product similarity.</p>
     *
     * @return null|int
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * @return null|SimilarProductCollection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return $this
     */
    public function withConfidence(?int $confidence)
    {
        $this->confidence = $confidence;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProducts(?SimilarProductCollection $products)
    {
        $this->products = $products;

        return $this;
    }


    public function build(): SimilarProductPair
    {
        return new SimilarProductPairModel(
            $this->confidence,
            $this->products
        );
    }

    public static function of(): SimilarProductPairBuilder
    {
        return new self();
    }
}
