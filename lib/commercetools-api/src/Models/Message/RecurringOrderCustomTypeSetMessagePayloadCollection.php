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
 * @extends MessagePayloadCollection<RecurringOrderCustomTypeSetMessagePayload>
 * @method RecurringOrderCustomTypeSetMessagePayload current()
 * @method RecurringOrderCustomTypeSetMessagePayload end()
 * @method RecurringOrderCustomTypeSetMessagePayload at($offset)
 */
class RecurringOrderCustomTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderCustomTypeSetMessagePayload $value
     * @psalm-param RecurringOrderCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomTypeSetMessagePayload $data */
                $data = RecurringOrderCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
