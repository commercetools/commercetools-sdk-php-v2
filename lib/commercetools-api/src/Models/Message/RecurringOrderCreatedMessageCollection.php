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
 * @extends MessageCollection<RecurringOrderCreatedMessage>
 * @method RecurringOrderCreatedMessage current()
 * @method RecurringOrderCreatedMessage end()
 * @method RecurringOrderCreatedMessage at($offset)
 */
class RecurringOrderCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderCreatedMessage $value
     * @psalm-param RecurringOrderCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCreatedMessage $data */
                $data = RecurringOrderCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
