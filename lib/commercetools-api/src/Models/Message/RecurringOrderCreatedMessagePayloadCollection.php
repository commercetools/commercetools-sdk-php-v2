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
 * @extends MessagePayloadCollection<RecurringOrderCreatedMessagePayload>
 * @method RecurringOrderCreatedMessagePayload current()
 * @method RecurringOrderCreatedMessagePayload end()
 * @method RecurringOrderCreatedMessagePayload at($offset)
 */
class RecurringOrderCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderCreatedMessagePayload $value
     * @psalm-param RecurringOrderCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCreatedMessagePayload $data */
                $data = RecurringOrderCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
