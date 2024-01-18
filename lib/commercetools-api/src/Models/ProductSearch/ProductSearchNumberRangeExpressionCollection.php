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
 * @extends ProductSearchQueryExpressionCollection<ProductSearchNumberRangeExpression>
 * @method ProductSearchNumberRangeExpression current()
 * @method ProductSearchNumberRangeExpression end()
 * @method ProductSearchNumberRangeExpression at($offset)
 */
class ProductSearchNumberRangeExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchNumberRangeExpression $value
     * @psalm-param ProductSearchNumberRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchNumberRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchNumberRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchNumberRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchNumberRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchNumberRangeExpression $data */
                $data = ProductSearchNumberRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
