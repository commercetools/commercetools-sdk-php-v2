<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartSetLineItemShippingDetailsAction>
 * @method MyCartSetLineItemShippingDetailsAction current()
 * @method MyCartSetLineItemShippingDetailsAction at($offset)
 */
class MyCartSetLineItemShippingDetailsActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetLineItemShippingDetailsAction $value
     * @psalm-param MyCartSetLineItemShippingDetailsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetLineItemShippingDetailsAction $data */
                $data = MyCartSetLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
