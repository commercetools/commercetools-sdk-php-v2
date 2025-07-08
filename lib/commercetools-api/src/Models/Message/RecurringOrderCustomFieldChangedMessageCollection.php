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
 * @extends MessageCollection<RecurringOrderCustomFieldChangedMessage>
 * @method RecurringOrderCustomFieldChangedMessage current()
 * @method RecurringOrderCustomFieldChangedMessage end()
 * @method RecurringOrderCustomFieldChangedMessage at($offset)
 */
class RecurringOrderCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderCustomFieldChangedMessage $value
     * @psalm-param RecurringOrderCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomFieldChangedMessage $data */
                $data = RecurringOrderCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
