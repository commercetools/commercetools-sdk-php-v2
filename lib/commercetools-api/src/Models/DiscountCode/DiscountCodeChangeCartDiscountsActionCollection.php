<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeChangeCartDiscountsAction>
 *
 * @method DiscountCodeChangeCartDiscountsAction current()
 * @method DiscountCodeChangeCartDiscountsAction at($offset)
 */
class DiscountCodeChangeCartDiscountsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeChangeCartDiscountsAction $value
     * @psalm-param DiscountCodeChangeCartDiscountsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeChangeCartDiscountsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeChangeCartDiscountsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeChangeCartDiscountsAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeChangeCartDiscountsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeChangeCartDiscountsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
