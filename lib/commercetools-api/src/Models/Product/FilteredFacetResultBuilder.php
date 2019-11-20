<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<FilteredFacetResult>
 */
final class FilteredFacetResultBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $count;

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
    public function withProductCount(?int $productCount)
    {
        $this->productCount = $productCount;

        return $this;
    }

    public function build(): FilteredFacetResult
    {
        return new FilteredFacetResultModel(
            $this->count,
            $this->productCount
        );
    }

    public static function of(): FilteredFacetResultBuilder
    {
        return new self();
    }
}
