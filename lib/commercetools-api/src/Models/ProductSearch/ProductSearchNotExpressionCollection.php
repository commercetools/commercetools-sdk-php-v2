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
 * @extends ProductSearchCompoundExpressionCollection<ProductSearchNotExpression>
 * @method ProductSearchNotExpression current()
 * @method ProductSearchNotExpression end()
 * @method ProductSearchNotExpression at($offset)
 */
class ProductSearchNotExpressionCollection extends ProductSearchCompoundExpressionCollection
{
    /**
     * @psalm-assert ProductSearchNotExpression $value
     * @psalm-param ProductSearchNotExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchNotExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchNotExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchNotExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchNotExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchNotExpression $data */
                $data = ProductSearchNotExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
