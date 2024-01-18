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
 * @extends MapperSequence<ProductSearchSorting>
 * @method ProductSearchSorting current()
 * @method ProductSearchSorting end()
 * @method ProductSearchSorting at($offset)
 */
class ProductSearchSortingCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchSorting $value
     * @psalm-param ProductSearchSorting|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchSortingCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchSorting) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchSorting
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchSorting {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchSorting $data */
                $data = ProductSearchSortingModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
