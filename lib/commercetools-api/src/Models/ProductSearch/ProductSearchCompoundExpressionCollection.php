<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchQueryCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of ProductSearchCompoundExpression
 * @extends ProductSearchQueryCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ProductSearchCompoundExpression current()
 * @method ProductSearchCompoundExpression end()
 * @method ProductSearchCompoundExpression at($offset)
 */
class ProductSearchCompoundExpressionCollection extends ProductSearchQueryCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchCompoundExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchCompoundExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchCompoundExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ProductSearchCompoundExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
