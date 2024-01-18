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
 * @extends ProductSearchQueryExpressionCollection<ProductSearchExistsExpression>
 * @method ProductSearchExistsExpression current()
 * @method ProductSearchExistsExpression end()
 * @method ProductSearchExistsExpression at($offset)
 */
class ProductSearchExistsExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchExistsExpression $value
     * @psalm-param ProductSearchExistsExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchExistsExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchExistsExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchExistsExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchExistsExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchExistsExpression $data */
                $data = ProductSearchExistsExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
