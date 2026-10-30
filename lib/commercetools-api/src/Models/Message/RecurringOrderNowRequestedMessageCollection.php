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
 * @extends MessageCollection<RecurringOrderNowRequestedMessage>
 * @method RecurringOrderNowRequestedMessage current()
 * @method RecurringOrderNowRequestedMessage end()
 * @method RecurringOrderNowRequestedMessage at($offset)
 */
class RecurringOrderNowRequestedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderNowRequestedMessage $value
     * @psalm-param RecurringOrderNowRequestedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderNowRequestedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderNowRequestedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderNowRequestedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderNowRequestedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderNowRequestedMessage $data */
                $data = RecurringOrderNowRequestedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
