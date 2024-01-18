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
 * @template T of ProductSearchFacetResultExpression
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ProductSearchFacetResultExpression current()
 * @method ProductSearchFacetResultExpression end()
 * @method ProductSearchFacetResultExpression at($offset)
 */
class ProductSearchFacetResultExpressionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetResultExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetResultExpression) {
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
        return function (?int $index): ?ProductSearchFacetResultExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ProductSearchFacetResultExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
