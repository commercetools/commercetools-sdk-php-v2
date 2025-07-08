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
 * @extends MessageCollection<RecurringOrderCustomFieldRemovedMessage>
 * @method RecurringOrderCustomFieldRemovedMessage current()
 * @method RecurringOrderCustomFieldRemovedMessage end()
 * @method RecurringOrderCustomFieldRemovedMessage at($offset)
 */
class RecurringOrderCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderCustomFieldRemovedMessage $value
     * @psalm-param RecurringOrderCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomFieldRemovedMessage $data */
                $data = RecurringOrderCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
