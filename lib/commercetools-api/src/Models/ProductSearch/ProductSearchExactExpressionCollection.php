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
 * @extends ProductSearchQueryExpressionCollection<ProductSearchExactExpression>
 * @method ProductSearchExactExpression current()
 * @method ProductSearchExactExpression end()
 * @method ProductSearchExactExpression at($offset)
 */
class ProductSearchExactExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchExactExpression $value
     * @psalm-param ProductSearchExactExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchExactExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchExactExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchExactExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchExactExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchExactExpression $data */
                $data = ProductSearchExactExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
