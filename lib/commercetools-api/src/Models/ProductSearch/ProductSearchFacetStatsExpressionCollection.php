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
 * @extends ProductSearchFacetExpressionCollection<ProductSearchFacetStatsExpression>
 * @method ProductSearchFacetStatsExpression current()
 * @method ProductSearchFacetStatsExpression end()
 * @method ProductSearchFacetStatsExpression at($offset)
 */
class ProductSearchFacetStatsExpressionCollection extends ProductSearchFacetExpressionCollection
{
    /**
     * @psalm-assert ProductSearchFacetStatsExpression $value
     * @psalm-param ProductSearchFacetStatsExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetStatsExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetStatsExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetStatsExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetStatsExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetStatsExpression $data */
                $data = ProductSearchFacetStatsExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
