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
 * @extends MapperSequence<ProductTypeUpdate>
 * @method ProductTypeUpdate current()
 * @method ProductTypeUpdate end()
 * @method ProductTypeUpdate at($offset)
 */
class ProductTypeUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeUpdate $value
     * @psalm-param ProductTypeUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeUpdate $data */
                $data = ProductTypeUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
