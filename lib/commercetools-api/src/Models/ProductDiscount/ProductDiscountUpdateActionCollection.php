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
 * @extends MapperSequence<ProductDiscountUpdateAction>
 * @method ProductDiscountUpdateAction current()
 * @method ProductDiscountUpdateAction at($offset)
 */
class ProductDiscountUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountUpdateAction $value
     * @psalm-param ProductDiscountUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
