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
 * @extends MessageCollection<RecurringOrderStartsAtSetMessage>
 * @method RecurringOrderStartsAtSetMessage current()
 * @method RecurringOrderStartsAtSetMessage end()
 * @method RecurringOrderStartsAtSetMessage at($offset)
 */
class RecurringOrderStartsAtSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderStartsAtSetMessage $value
     * @psalm-param RecurringOrderStartsAtSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderStartsAtSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderStartsAtSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderStartsAtSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderStartsAtSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderStartsAtSetMessage $data */
                $data = RecurringOrderStartsAtSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
