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
 * @extends ProductSearchCompoundExpressionCollection<ProductSearchFilterExpression>
 * @method ProductSearchFilterExpression current()
 * @method ProductSearchFilterExpression end()
 * @method ProductSearchFilterExpression at($offset)
 */
class ProductSearchFilterExpressionCollection extends ProductSearchCompoundExpressionCollection
{
    /**
     * @psalm-assert ProductSearchFilterExpression $value
     * @psalm-param ProductSearchFilterExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFilterExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFilterExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFilterExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFilterExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFilterExpression $data */
                $data = ProductSearchFilterExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
