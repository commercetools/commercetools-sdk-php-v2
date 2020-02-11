<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductDiscountSetValidFromAndUntilAction>
 * @method ProductDiscountSetValidFromAndUntilAction current()
 * @method ProductDiscountSetValidFromAndUntilAction at($offset)
 */
class ProductDiscountSetValidFromAndUntilActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountSetValidFromAndUntilAction $value
     * @psalm-param ProductDiscountSetValidFromAndUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountSetValidFromAndUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountSetValidFromAndUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountSetValidFromAndUntilAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountSetValidFromAndUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountSetValidFromAndUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
