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
 * @template T of ProductSearchFacetResult
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ProductSearchFacetResult current()
 * @method ProductSearchFacetResult end()
 * @method ProductSearchFacetResult at($offset)
 */
class ProductSearchFacetResultCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetResult) {
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
        return function (?int $index): ?ProductSearchFacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ProductSearchFacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
