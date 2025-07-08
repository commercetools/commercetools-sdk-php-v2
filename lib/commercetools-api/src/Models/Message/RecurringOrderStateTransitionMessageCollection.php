<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<RecurringOrderStateTransitionMessage>
 * @method RecurringOrderStateTransitionMessage current()
 * @method RecurringOrderStateTransitionMessage end()
 * @method RecurringOrderStateTransitionMessage at($offset)
 */
class RecurringOrderStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderStateTransitionMessage $value
     * @psalm-param RecurringOrderStateTransitionMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderStateTransitionMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderStateTransitionMessage $data */
                $data = RecurringOrderStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
