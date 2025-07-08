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
 * @extends MessagePayloadCollection<RecurringOrderStateChangedMessagePayload>
 * @method RecurringOrderStateChangedMessagePayload current()
 * @method RecurringOrderStateChangedMessagePayload end()
 * @method RecurringOrderStateChangedMessagePayload at($offset)
 */
class RecurringOrderStateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderStateChangedMessagePayload $value
     * @psalm-param RecurringOrderStateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderStateChangedMessagePayload $data */
                $data = RecurringOrderStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
