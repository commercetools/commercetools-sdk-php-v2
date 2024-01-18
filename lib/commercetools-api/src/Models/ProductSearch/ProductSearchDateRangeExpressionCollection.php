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
 * @extends ProductSearchQueryExpressionCollection<ProductSearchDateRangeExpression>
 * @method ProductSearchDateRangeExpression current()
 * @method ProductSearchDateRangeExpression end()
 * @method ProductSearchDateRangeExpression at($offset)
 */
class ProductSearchDateRangeExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchDateRangeExpression $value
     * @psalm-param ProductSearchDateRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchDateRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchDateRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchDateRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchDateRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchDateRangeExpression $data */
                $data = ProductSearchDateRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
