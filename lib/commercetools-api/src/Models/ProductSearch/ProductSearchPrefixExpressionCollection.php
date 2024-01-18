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
 * @extends ProductSearchQueryExpressionCollection<ProductSearchPrefixExpression>
 * @method ProductSearchPrefixExpression current()
 * @method ProductSearchPrefixExpression end()
 * @method ProductSearchPrefixExpression at($offset)
 */
class ProductSearchPrefixExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchPrefixExpression $value
     * @psalm-param ProductSearchPrefixExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchPrefixExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchPrefixExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchPrefixExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchPrefixExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchPrefixExpression $data */
                $data = ProductSearchPrefixExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
