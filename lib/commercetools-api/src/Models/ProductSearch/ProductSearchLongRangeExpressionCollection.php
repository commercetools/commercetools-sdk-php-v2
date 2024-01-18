<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchQueryExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchQueryExpressionCollection<ProductSearchLongRangeExpression>
 * @method ProductSearchLongRangeExpression current()
 * @method ProductSearchLongRangeExpression end()
 * @method ProductSearchLongRangeExpression at($offset)
 */
class ProductSearchLongRangeExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchLongRangeExpression $value
     * @psalm-param ProductSearchLongRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchLongRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchLongRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchLongRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchLongRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchLongRangeExpression $data */
                $data = ProductSearchLongRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
