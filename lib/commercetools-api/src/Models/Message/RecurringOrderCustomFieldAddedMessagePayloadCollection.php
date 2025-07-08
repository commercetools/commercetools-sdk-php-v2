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
 * @extends MessagePayloadCollection<RecurringOrderCustomFieldAddedMessagePayload>
 * @method RecurringOrderCustomFieldAddedMessagePayload current()
 * @method RecurringOrderCustomFieldAddedMessagePayload end()
 * @method RecurringOrderCustomFieldAddedMessagePayload at($offset)
 */
class RecurringOrderCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderCustomFieldAddedMessagePayload $value
     * @psalm-param RecurringOrderCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomFieldAddedMessagePayload $data */
                $data = RecurringOrderCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
