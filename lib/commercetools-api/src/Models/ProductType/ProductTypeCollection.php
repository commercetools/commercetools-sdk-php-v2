<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductType>
 *
 * @method ProductType current()
 * @method ProductType at($offset)
 */
class ProductTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductType $value
     * @psalm-param ProductType|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductType
     */
    protected function mapper()
    {
        return function (int $index): ?ProductType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
