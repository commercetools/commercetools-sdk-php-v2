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
 * @extends MapperSequence<ProductDiscountChangeValueAction>
 *
 * @method ProductDiscountChangeValueAction current()
 * @method ProductDiscountChangeValueAction at($offset)
 */
class ProductDiscountChangeValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountChangeValueAction $value
     * @psalm-param ProductDiscountChangeValueAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountChangeValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountChangeValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountChangeValueAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountChangeValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountChangeValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
