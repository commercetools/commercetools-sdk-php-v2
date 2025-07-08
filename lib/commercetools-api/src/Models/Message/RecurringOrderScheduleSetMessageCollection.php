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
 * @extends MessageCollection<RecurringOrderScheduleSetMessage>
 * @method RecurringOrderScheduleSetMessage current()
 * @method RecurringOrderScheduleSetMessage end()
 * @method RecurringOrderScheduleSetMessage at($offset)
 */
class RecurringOrderScheduleSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderScheduleSetMessage $value
     * @psalm-param RecurringOrderScheduleSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderScheduleSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderScheduleSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderScheduleSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderScheduleSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderScheduleSetMessage $data */
                $data = RecurringOrderScheduleSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
