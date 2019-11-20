<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<FacetResultTerm>
 */
final class FacetResultTermBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?JsonObject
     */
    private $term;

    /**
     * @var ?int
     */
    private $productCount;

    /**
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return null|JsonObject
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @return null|int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTerm(?JsonObject $term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductCount(?int $productCount)
    {
        $this->productCount = $productCount;

        return $this;
    }

    public function build(): FacetResultTerm
    {
        return new FacetResultTermModel(
            $this->count,
            $this->term,
            $this->productCount
        );
    }

    public static function of(): FacetResultTermBuilder
    {
        return new self();
    }
}
