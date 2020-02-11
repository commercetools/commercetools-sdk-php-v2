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
 * @extends MapperSequence<ProductDiscountSetKeyAction>
 * @method ProductDiscountSetKeyAction current()
 * @method ProductDiscountSetKeyAction at($offset)
 */
class ProductDiscountSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountSetKeyAction $value
     * @psalm-param ProductDiscountSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
