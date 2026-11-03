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
 * @extends MessagePayloadCollection<RecurringOrderNowRequestedMessagePayload>
 * @method RecurringOrderNowRequestedMessagePayload current()
 * @method RecurringOrderNowRequestedMessagePayload end()
 * @method RecurringOrderNowRequestedMessagePayload at($offset)
 */
class RecurringOrderNowRequestedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderNowRequestedMessagePayload $value
     * @psalm-param RecurringOrderNowRequestedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderNowRequestedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderNowRequestedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderNowRequestedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderNowRequestedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderNowRequestedMessagePayload $data */
                $data = RecurringOrderNowRequestedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
