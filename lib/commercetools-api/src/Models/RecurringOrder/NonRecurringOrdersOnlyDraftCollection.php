<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderScopeDraftCollection<NonRecurringOrdersOnlyDraft>
 * @method NonRecurringOrdersOnlyDraft current()
 * @method NonRecurringOrdersOnlyDraft end()
 * @method NonRecurringOrdersOnlyDraft at($offset)
 */
class NonRecurringOrdersOnlyDraftCollection extends RecurringOrderScopeDraftCollection
{
    /**
     * @psalm-assert NonRecurringOrdersOnlyDraft $value
     * @psalm-param NonRecurringOrdersOnlyDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NonRecurringOrdersOnlyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof NonRecurringOrdersOnlyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NonRecurringOrdersOnlyDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?NonRecurringOrdersOnlyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var NonRecurringOrdersOnlyDraft $data */
                $data = NonRecurringOrdersOnlyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
