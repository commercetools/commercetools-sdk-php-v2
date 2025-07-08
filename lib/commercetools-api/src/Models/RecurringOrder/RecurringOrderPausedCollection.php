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
 * @extends RecurringOrderStateDraftCollection<RecurringOrderPaused>
 * @method RecurringOrderPaused current()
 * @method RecurringOrderPaused end()
 * @method RecurringOrderPaused at($offset)
 */
class RecurringOrderPausedCollection extends RecurringOrderStateDraftCollection
{
    /**
     * @psalm-assert RecurringOrderPaused $value
     * @psalm-param RecurringOrderPaused|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderPausedCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderPaused) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderPaused
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderPaused {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderPaused $data */
                $data = RecurringOrderPausedModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
