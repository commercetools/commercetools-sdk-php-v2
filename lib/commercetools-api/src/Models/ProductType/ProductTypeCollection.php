<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<ProductType>
 * @method ProductType current()
 * @method ProductType at($offset)
 */
class ProductTypeCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert ProductType $value
     * @psalm-param ProductType|stdClass $value
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
        return function (?int $index): ?ProductType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductType $data */
                $data = ProductTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
