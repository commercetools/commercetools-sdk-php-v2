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
 * @extends MapperSequence<ProductDiscountSetValidFromAction>
 *
 * @method ProductDiscountSetValidFromAction current()
 * @method ProductDiscountSetValidFromAction at($offset)
 */
class ProductDiscountSetValidFromActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountSetValidFromAction $value
     * @psalm-param ProductDiscountSetValidFromAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountSetValidFromActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountSetValidFromAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountSetValidFromAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountSetValidFromAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountSetValidFromActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
