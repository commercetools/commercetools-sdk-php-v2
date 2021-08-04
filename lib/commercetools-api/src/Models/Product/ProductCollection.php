<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Product>
 * @method Product current()
 * @method Product at($offset)
 */
class ProductCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Product $value
     * @psalm-param Product|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductCollection
     */
    public function add($value)
    {
        if (!$value instanceof Product) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Product
     */
    protected function mapper()
    {
        return function (?int $index): ?Product {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Product $data */
                $data = ProductModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
