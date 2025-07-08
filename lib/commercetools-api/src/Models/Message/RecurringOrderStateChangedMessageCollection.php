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
 * @extends MessageCollection<RecurringOrderStateChangedMessage>
 * @method RecurringOrderStateChangedMessage current()
 * @method RecurringOrderStateChangedMessage end()
 * @method RecurringOrderStateChangedMessage at($offset)
 */
class RecurringOrderStateChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderStateChangedMessage $value
     * @psalm-param RecurringOrderStateChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderStateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderStateChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderStateChangedMessage $data */
                $data = RecurringOrderStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
