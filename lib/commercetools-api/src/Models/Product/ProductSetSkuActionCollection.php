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
 * @extends MapperSequence<ProductSetSkuAction>
 *
 * @method ProductSetSkuAction current()
 * @method ProductSetSkuAction at($offset)
 */
class ProductSetSkuActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetSkuAction $value
     * @psalm-param ProductSetSkuAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductSetSkuActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetSkuAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetSkuAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetSkuAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetSkuActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
