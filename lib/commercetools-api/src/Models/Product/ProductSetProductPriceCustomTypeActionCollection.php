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
 * @extends MapperSequence<ProductSetProductPriceCustomTypeAction>
 * @method ProductSetProductPriceCustomTypeAction current()
 * @method ProductSetProductPriceCustomTypeAction at($offset)
 */
class ProductSetProductPriceCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetProductPriceCustomTypeAction $value
     * @psalm-param ProductSetProductPriceCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetProductPriceCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetProductPriceCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetProductPriceCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetProductPriceCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetProductPriceCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
