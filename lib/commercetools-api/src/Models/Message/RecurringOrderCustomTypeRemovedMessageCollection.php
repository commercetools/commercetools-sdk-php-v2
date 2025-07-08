<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<RecurringOrderCustomTypeRemovedMessage>
 * @method RecurringOrderCustomTypeRemovedMessage current()
 * @method RecurringOrderCustomTypeRemovedMessage end()
 * @method RecurringOrderCustomTypeRemovedMessage at($offset)
 */
class RecurringOrderCustomTypeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderCustomTypeRemovedMessage $value
     * @psalm-param RecurringOrderCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomTypeRemovedMessage $data */
                $data = RecurringOrderCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
