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
 * @extends MessagePayloadCollection<RecurringOrderFailedMessagePayload>
 * @method RecurringOrderFailedMessagePayload current()
 * @method RecurringOrderFailedMessagePayload end()
 * @method RecurringOrderFailedMessagePayload at($offset)
 */
class RecurringOrderFailedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderFailedMessagePayload $value
     * @psalm-param RecurringOrderFailedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderFailedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderFailedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderFailedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderFailedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderFailedMessagePayload $data */
                $data = RecurringOrderFailedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
