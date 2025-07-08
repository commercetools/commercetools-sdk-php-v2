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
 * @extends MessagePayloadCollection<RecurringOrderKeySetMessagePayload>
 * @method RecurringOrderKeySetMessagePayload current()
 * @method RecurringOrderKeySetMessagePayload end()
 * @method RecurringOrderKeySetMessagePayload at($offset)
 */
class RecurringOrderKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderKeySetMessagePayload $value
     * @psalm-param RecurringOrderKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderKeySetMessagePayload $data */
                $data = RecurringOrderKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
