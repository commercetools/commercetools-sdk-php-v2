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
 * @extends ProductSearchQueryExpressionCollection<ProductSearchDateTimeRangeExpression>
 * @method ProductSearchDateTimeRangeExpression current()
 * @method ProductSearchDateTimeRangeExpression end()
 * @method ProductSearchDateTimeRangeExpression at($offset)
 */
class ProductSearchDateTimeRangeExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchDateTimeRangeExpression $value
     * @psalm-param ProductSearchDateTimeRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchDateTimeRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchDateTimeRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchDateTimeRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchDateTimeRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchDateTimeRangeExpression $data */
                $data = ProductSearchDateTimeRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
