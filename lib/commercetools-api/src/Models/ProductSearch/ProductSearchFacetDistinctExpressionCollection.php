<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchFacetExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchFacetExpressionCollection<ProductSearchFacetDistinctExpression>
 * @method ProductSearchFacetDistinctExpression current()
 * @method ProductSearchFacetDistinctExpression end()
 * @method ProductSearchFacetDistinctExpression at($offset)
 */
class ProductSearchFacetDistinctExpressionCollection extends ProductSearchFacetExpressionCollection
{
    /**
     * @psalm-assert ProductSearchFacetDistinctExpression $value
     * @psalm-param ProductSearchFacetDistinctExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetDistinctExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetDistinctExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetDistinctExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetDistinctExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetDistinctExpression $data */
                $data = ProductSearchFacetDistinctExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
