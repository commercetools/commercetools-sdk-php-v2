<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductProjection>
 *
 * @method ProductProjection current()
 * @method ProductProjection at($offset)
 */
class ProductProjectionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductProjection $value
     * @psalm-param ProductProjection|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductProjectionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductProjection) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductProjection
     */
    protected function mapper()
    {
        return function (int $index): ?ProductProjection {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductProjectionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
