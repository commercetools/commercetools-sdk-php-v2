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
 * @template T of ProductSearchQueryExpression
 * @extends ProductSearchQueryCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ProductSearchQueryExpression current()
 * @method ProductSearchQueryExpression end()
 * @method ProductSearchQueryExpression at($offset)
 */
class ProductSearchQueryExpressionCollection extends ProductSearchQueryCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchQueryExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchQueryExpression) {
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
        return function (?int $index): ?ProductSearchQueryExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ProductSearchQueryExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
