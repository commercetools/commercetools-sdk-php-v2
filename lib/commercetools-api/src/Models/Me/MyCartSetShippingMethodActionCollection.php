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
 * @extends MyCartUpdateActionCollection<MyCartSetShippingMethodAction>
 * @method MyCartSetShippingMethodAction current()
 * @method MyCartSetShippingMethodAction at($offset)
 */
class MyCartSetShippingMethodActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetShippingMethodAction $value
     * @psalm-param MyCartSetShippingMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetShippingMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetShippingMethodAction $data */
                $data = MyCartSetShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
