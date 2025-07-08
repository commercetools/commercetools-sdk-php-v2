<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderStateDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderStateDraftCollection<RecurringOrderExpired>
 * @method RecurringOrderExpired current()
 * @method RecurringOrderExpired end()
 * @method RecurringOrderExpired at($offset)
 */
class RecurringOrderExpiredCollection extends RecurringOrderStateDraftCollection
{
    /**
     * @psalm-assert RecurringOrderExpired $value
     * @psalm-param RecurringOrderExpired|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderExpiredCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderExpired) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderExpired
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderExpired {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderExpired $data */
                $data = RecurringOrderExpiredModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
