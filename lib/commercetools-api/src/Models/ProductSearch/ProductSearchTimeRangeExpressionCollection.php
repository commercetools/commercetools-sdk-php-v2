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
 * @extends ProductSearchQueryExpressionCollection<ProductSearchTimeRangeExpression>
 * @method ProductSearchTimeRangeExpression current()
 * @method ProductSearchTimeRangeExpression end()
 * @method ProductSearchTimeRangeExpression at($offset)
 */
class ProductSearchTimeRangeExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchTimeRangeExpression $value
     * @psalm-param ProductSearchTimeRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchTimeRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchTimeRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchTimeRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchTimeRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchTimeRangeExpression $data */
                $data = ProductSearchTimeRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
