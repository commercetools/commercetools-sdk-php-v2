<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchFacetStatsExpression>
 */
final class ProductSearchFacetStatsExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchFacetStatsValue|ProductSearchFacetStatsValueBuilder
     */
    private $stats;

    /**
     * <p>Definition of the stats facet.</p>
     *

     * @return null|ProductSearchFacetStatsValue
     */
    public function getStats()
    {
        return $this->stats instanceof ProductSearchFacetStatsValueBuilder ? $this->stats->build() : $this->stats;
    }

    /**
     * @param ?ProductSearchFacetStatsValue $stats
     * @return $this
     */
    public function withStats(?ProductSearchFacetStatsValue $stats)
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * @deprecated use withStats() instead
     * @return $this
     */
    public function withStatsBuilder(?ProductSearchFacetStatsValueBuilder $stats)
    {
        $this->stats = $stats;

        return $this;
    }

    public function build(): ProductSearchFacetStatsExpression
    {
        return new ProductSearchFacetStatsExpressionModel(
            $this->stats instanceof ProductSearchFacetStatsValueBuilder ? $this->stats->build() : $this->stats
        );
    }

    public static function of(): ProductSearchFacetStatsExpressionBuilder
    {
        return new self();
    }
}
