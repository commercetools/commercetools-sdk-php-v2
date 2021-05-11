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
 * @extends MyCartUpdateActionCollection<MyCartSetLineItemCustomTypeAction>
 * @method MyCartSetLineItemCustomTypeAction current()
 * @method MyCartSetLineItemCustomTypeAction at($offset)
 */
class MyCartSetLineItemCustomTypeActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetLineItemCustomTypeAction $value
     * @psalm-param MyCartSetLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetLineItemCustomTypeAction $data */
                $data = MyCartSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
