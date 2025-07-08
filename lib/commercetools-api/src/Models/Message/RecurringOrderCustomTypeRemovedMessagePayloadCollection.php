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
 * @extends MessagePayloadCollection<RecurringOrderCustomTypeRemovedMessagePayload>
 * @method RecurringOrderCustomTypeRemovedMessagePayload current()
 * @method RecurringOrderCustomTypeRemovedMessagePayload end()
 * @method RecurringOrderCustomTypeRemovedMessagePayload at($offset)
 */
class RecurringOrderCustomTypeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderCustomTypeRemovedMessagePayload $value
     * @psalm-param RecurringOrderCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomTypeRemovedMessagePayload $data */
                $data = RecurringOrderCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
