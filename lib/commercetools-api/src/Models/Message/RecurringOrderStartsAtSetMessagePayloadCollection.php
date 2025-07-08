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
 * @extends MessagePayloadCollection<RecurringOrderStartsAtSetMessagePayload>
 * @method RecurringOrderStartsAtSetMessagePayload current()
 * @method RecurringOrderStartsAtSetMessagePayload end()
 * @method RecurringOrderStartsAtSetMessagePayload at($offset)
 */
class RecurringOrderStartsAtSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderStartsAtSetMessagePayload $value
     * @psalm-param RecurringOrderStartsAtSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderStartsAtSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderStartsAtSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderStartsAtSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderStartsAtSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderStartsAtSetMessagePayload $data */
                $data = RecurringOrderStartsAtSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
