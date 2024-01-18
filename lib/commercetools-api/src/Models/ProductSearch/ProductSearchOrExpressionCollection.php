<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchCompoundExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchCompoundExpressionCollection<ProductSearchOrExpression>
 * @method ProductSearchOrExpression current()
 * @method ProductSearchOrExpression end()
 * @method ProductSearchOrExpression at($offset)
 */
class ProductSearchOrExpressionCollection extends ProductSearchCompoundExpressionCollection
{
    /**
     * @psalm-assert ProductSearchOrExpression $value
     * @psalm-param ProductSearchOrExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchOrExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchOrExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchOrExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchOrExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchOrExpression $data */
                $data = ProductSearchOrExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
