<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RecurringOrderDraft>
 * @method RecurringOrderDraft current()
 * @method RecurringOrderDraft end()
 * @method RecurringOrderDraft at($offset)
 */
class RecurringOrderDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurringOrderDraft $value
     * @psalm-param RecurringOrderDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderDraft $data */
                $data = RecurringOrderDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
