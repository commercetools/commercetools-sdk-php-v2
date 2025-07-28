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
 * @extends MessagePayloadCollection<RecurringOrderExpiresAtSetMessagePayload>
 * @method RecurringOrderExpiresAtSetMessagePayload current()
 * @method RecurringOrderExpiresAtSetMessagePayload end()
 * @method RecurringOrderExpiresAtSetMessagePayload at($offset)
 */
class RecurringOrderExpiresAtSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderExpiresAtSetMessagePayload $value
     * @psalm-param RecurringOrderExpiresAtSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderExpiresAtSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderExpiresAtSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderExpiresAtSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderExpiresAtSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderExpiresAtSetMessagePayload $data */
                $data = RecurringOrderExpiresAtSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
