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
 * @extends ProductSearchCompoundExpressionCollection<ProductSearchAndExpression>
 * @method ProductSearchAndExpression current()
 * @method ProductSearchAndExpression end()
 * @method ProductSearchAndExpression at($offset)
 */
class ProductSearchAndExpressionCollection extends ProductSearchCompoundExpressionCollection
{
    /**
     * @psalm-assert ProductSearchAndExpression $value
     * @psalm-param ProductSearchAndExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchAndExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchAndExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchAndExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchAndExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchAndExpression $data */
                $data = ProductSearchAndExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
