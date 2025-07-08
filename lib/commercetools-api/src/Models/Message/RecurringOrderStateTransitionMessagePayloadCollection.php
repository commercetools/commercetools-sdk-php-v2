<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<RecurringOrderStateTransitionMessagePayload>
 * @method RecurringOrderStateTransitionMessagePayload current()
 * @method RecurringOrderStateTransitionMessagePayload end()
 * @method RecurringOrderStateTransitionMessagePayload at($offset)
 */
class RecurringOrderStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderStateTransitionMessagePayload $value
     * @psalm-param RecurringOrderStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderStateTransitionMessagePayload $data */
                $data = RecurringOrderStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
