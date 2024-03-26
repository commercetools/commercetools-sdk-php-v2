<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSearchFacetDistinctBucketSortExpression>
 * @method ProductSearchFacetDistinctBucketSortExpression current()
 * @method ProductSearchFacetDistinctBucketSortExpression end()
 * @method ProductSearchFacetDistinctBucketSortExpression at($offset)
 */
class ProductSearchFacetDistinctBucketSortExpressionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetDistinctBucketSortExpression $value
     * @psalm-param ProductSearchFacetDistinctBucketSortExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetDistinctBucketSortExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetDistinctBucketSortExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetDistinctBucketSortExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetDistinctBucketSortExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetDistinctBucketSortExpression $data */
                $data = ProductSearchFacetDistinctBucketSortExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
