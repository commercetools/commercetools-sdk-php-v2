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
 * @extends BaseResourceCollection<ProductProjection>
 * @method ProductProjection current()
 * @method ProductProjection end()
 * @method ProductProjection at($offset)
 */
class ProductProjectionCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert ProductProjection $value
     * @psalm-param ProductProjection|stdClass $value
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
        return function (?int $index): ?ProductProjection {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductProjection $data */
                $data = ProductProjectionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
