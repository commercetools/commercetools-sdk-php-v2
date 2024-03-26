<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of ProductSearchFacetExpression
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ProductSearchFacetExpression current()
 * @method ProductSearchFacetExpression end()
 * @method ProductSearchFacetExpression at($offset)
 */
class ProductSearchFacetExpressionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetExpression) {
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
        return function (?int $index): ?ProductSearchFacetExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ProductSearchFacetExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
