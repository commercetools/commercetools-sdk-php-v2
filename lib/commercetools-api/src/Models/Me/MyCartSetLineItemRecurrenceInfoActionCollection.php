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
 * @extends MyCartUpdateActionCollection<MyCartSetLineItemRecurrenceInfoAction>
 * @method MyCartSetLineItemRecurrenceInfoAction current()
 * @method MyCartSetLineItemRecurrenceInfoAction end()
 * @method MyCartSetLineItemRecurrenceInfoAction at($offset)
 */
class MyCartSetLineItemRecurrenceInfoActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetLineItemRecurrenceInfoAction $value
     * @psalm-param MyCartSetLineItemRecurrenceInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetLineItemRecurrenceInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetLineItemRecurrenceInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetLineItemRecurrenceInfoAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetLineItemRecurrenceInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetLineItemRecurrenceInfoAction $data */
                $data = MyCartSetLineItemRecurrenceInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
