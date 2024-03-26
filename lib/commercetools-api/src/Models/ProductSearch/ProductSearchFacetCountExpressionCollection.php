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
 * @extends ProductSearchFacetExpressionCollection<ProductSearchFacetCountExpression>
 * @method ProductSearchFacetCountExpression current()
 * @method ProductSearchFacetCountExpression end()
 * @method ProductSearchFacetCountExpression at($offset)
 */
class ProductSearchFacetCountExpressionCollection extends ProductSearchFacetExpressionCollection
{
    /**
     * @psalm-assert ProductSearchFacetCountExpression $value
     * @psalm-param ProductSearchFacetCountExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetCountExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetCountExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetCountExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetCountExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetCountExpression $data */
                $data = ProductSearchFacetCountExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
