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
 * @implements Builder<ProductSearchFacetDistinctBucketSortExpression>
 */
final class ProductSearchFacetDistinctBucketSortExpressionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $by;

    /**

     * @var ?string
     */
    private $order;

    /**
     * <p>Defines whether to sort by bucket count or key.</p>
     *

     * @return null|string
     */
    public function getBy()
    {
        return $this->by;
    }

    /**
     * <p>Defines the sorting order.</p>
     *

     * @return null|string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param ?string $by
     * @return $this
     */
    public function withBy(?string $by)
    {
        $this->by = $by;

        return $this;
    }

    /**
     * @param ?string $order
     * @return $this
     */
    public function withOrder(?string $order)
    {
        $this->order = $order;

        return $this;
    }


    public function build(): ProductSearchFacetDistinctBucketSortExpression
    {
        return new ProductSearchFacetDistinctBucketSortExpressionModel(
            $this->by,
            $this->order
        );
    }

    public static function of(): ProductSearchFacetDistinctBucketSortExpressionBuilder
    {
        return new self();
    }
}
