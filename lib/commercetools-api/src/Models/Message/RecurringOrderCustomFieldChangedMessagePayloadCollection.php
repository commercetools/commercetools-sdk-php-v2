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
 * @extends MessagePayloadCollection<RecurringOrderCustomFieldChangedMessagePayload>
 * @method RecurringOrderCustomFieldChangedMessagePayload current()
 * @method RecurringOrderCustomFieldChangedMessagePayload end()
 * @method RecurringOrderCustomFieldChangedMessagePayload at($offset)
 */
class RecurringOrderCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderCustomFieldChangedMessagePayload $value
     * @psalm-param RecurringOrderCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomFieldChangedMessagePayload $data */
                $data = RecurringOrderCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
