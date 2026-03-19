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
 * @extends MessageCollection<RecurringOrderFailedMessage>
 * @method RecurringOrderFailedMessage current()
 * @method RecurringOrderFailedMessage end()
 * @method RecurringOrderFailedMessage at($offset)
 */
class RecurringOrderFailedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderFailedMessage $value
     * @psalm-param RecurringOrderFailedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderFailedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderFailedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderFailedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderFailedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderFailedMessage $data */
                $data = RecurringOrderFailedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
