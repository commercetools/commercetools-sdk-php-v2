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
 * @extends MapperSequence<ProductData>
 * @method ProductData current()
 * @method ProductData at($offset)
 */
class ProductDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductData $value
     * @psalm-param ProductData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductData
     */
    protected function mapper()
    {
        return function (int $index): ?ProductData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
