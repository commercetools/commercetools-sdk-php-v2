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
 * @extends MessageCollection<RecurringOrderCustomFieldAddedMessage>
 * @method RecurringOrderCustomFieldAddedMessage current()
 * @method RecurringOrderCustomFieldAddedMessage end()
 * @method RecurringOrderCustomFieldAddedMessage at($offset)
 */
class RecurringOrderCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderCustomFieldAddedMessage $value
     * @psalm-param RecurringOrderCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomFieldAddedMessage $data */
                $data = RecurringOrderCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
