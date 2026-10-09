<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RecurringPaymentAllocation>
 * @method RecurringPaymentAllocation current()
 * @method RecurringPaymentAllocation end()
 * @method RecurringPaymentAllocation at($offset)
 */
class RecurringPaymentAllocationCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurringPaymentAllocation $value
     * @psalm-param RecurringPaymentAllocation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringPaymentAllocationCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringPaymentAllocation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringPaymentAllocation
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringPaymentAllocation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringPaymentAllocation $data */
                $data = RecurringPaymentAllocationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
