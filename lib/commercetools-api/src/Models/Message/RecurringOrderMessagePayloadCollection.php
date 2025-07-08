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
 * @extends MessagePayloadCollection<RecurringOrderMessagePayload>
 * @method RecurringOrderMessagePayload current()
 * @method RecurringOrderMessagePayload end()
 * @method RecurringOrderMessagePayload at($offset)
 */
class RecurringOrderMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderMessagePayload $value
     * @psalm-param RecurringOrderMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderMessagePayload $data */
                $data = RecurringOrderMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
