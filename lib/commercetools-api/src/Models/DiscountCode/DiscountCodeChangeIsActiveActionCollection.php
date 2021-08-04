<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\DiscountCode\DiscountCodeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeChangeIsActiveAction>
 * @method DiscountCodeChangeIsActiveAction current()
 * @method DiscountCodeChangeIsActiveAction end()
 * @method DiscountCodeChangeIsActiveAction at($offset)
 */
class DiscountCodeChangeIsActiveActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeChangeIsActiveAction $value
     * @psalm-param DiscountCodeChangeIsActiveAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeChangeIsActiveActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeChangeIsActiveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeChangeIsActiveAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeChangeIsActiveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeChangeIsActiveAction $data */
                $data = DiscountCodeChangeIsActiveActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
