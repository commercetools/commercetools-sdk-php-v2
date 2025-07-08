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
 * @extends MessagePayloadCollection<RecurringOrderScheduleSetMessagePayload>
 * @method RecurringOrderScheduleSetMessagePayload current()
 * @method RecurringOrderScheduleSetMessagePayload end()
 * @method RecurringOrderScheduleSetMessagePayload at($offset)
 */
class RecurringOrderScheduleSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderScheduleSetMessagePayload $value
     * @psalm-param RecurringOrderScheduleSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderScheduleSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderScheduleSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderScheduleSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderScheduleSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderScheduleSetMessagePayload $data */
                $data = RecurringOrderScheduleSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
