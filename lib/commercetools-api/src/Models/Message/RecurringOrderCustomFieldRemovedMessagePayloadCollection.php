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
 * @extends MessagePayloadCollection<RecurringOrderCustomFieldRemovedMessagePayload>
 * @method RecurringOrderCustomFieldRemovedMessagePayload current()
 * @method RecurringOrderCustomFieldRemovedMessagePayload end()
 * @method RecurringOrderCustomFieldRemovedMessagePayload at($offset)
 */
class RecurringOrderCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderCustomFieldRemovedMessagePayload $value
     * @psalm-param RecurringOrderCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomFieldRemovedMessagePayload $data */
                $data = RecurringOrderCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
