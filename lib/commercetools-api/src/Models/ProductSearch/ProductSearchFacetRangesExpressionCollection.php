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
 * @extends ProductSearchFacetExpressionCollection<ProductSearchFacetRangesExpression>
 * @method ProductSearchFacetRangesExpression current()
 * @method ProductSearchFacetRangesExpression end()
 * @method ProductSearchFacetRangesExpression at($offset)
 */
class ProductSearchFacetRangesExpressionCollection extends ProductSearchFacetExpressionCollection
{
    /**
     * @psalm-assert ProductSearchFacetRangesExpression $value
     * @psalm-param ProductSearchFacetRangesExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetRangesExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetRangesExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetRangesExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetRangesExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetRangesExpression $data */
                $data = ProductSearchFacetRangesExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
