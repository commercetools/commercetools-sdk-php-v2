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
 * @extends MyCartUpdateActionCollection<MyCartSetCustomLineItemRecurrenceInfoAction>
 * @method MyCartSetCustomLineItemRecurrenceInfoAction current()
 * @method MyCartSetCustomLineItemRecurrenceInfoAction end()
 * @method MyCartSetCustomLineItemRecurrenceInfoAction at($offset)
 */
class MyCartSetCustomLineItemRecurrenceInfoActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetCustomLineItemRecurrenceInfoAction $value
     * @psalm-param MyCartSetCustomLineItemRecurrenceInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetCustomLineItemRecurrenceInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetCustomLineItemRecurrenceInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetCustomLineItemRecurrenceInfoAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetCustomLineItemRecurrenceInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetCustomLineItemRecurrenceInfoAction $data */
                $data = MyCartSetCustomLineItemRecurrenceInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
