<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyCartSetLineItemCustomFieldAction>
 * @method MyCartSetLineItemCustomFieldAction current()
 * @method MyCartSetLineItemCustomFieldAction at($offset)
 */
class MyCartSetLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetLineItemCustomFieldAction $value
     * @psalm-param MyCartSetLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
