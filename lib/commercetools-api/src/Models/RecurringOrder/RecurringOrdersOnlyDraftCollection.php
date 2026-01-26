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
 * @extends RecurringOrderScopeDraftCollection<RecurringOrdersOnlyDraft>
 * @method RecurringOrdersOnlyDraft current()
 * @method RecurringOrdersOnlyDraft end()
 * @method RecurringOrdersOnlyDraft at($offset)
 */
class RecurringOrdersOnlyDraftCollection extends RecurringOrderScopeDraftCollection
{
    /**
     * @psalm-assert RecurringOrdersOnlyDraft $value
     * @psalm-param RecurringOrdersOnlyDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrdersOnlyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrdersOnlyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrdersOnlyDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrdersOnlyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrdersOnlyDraft $data */
                $data = RecurringOrdersOnlyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
