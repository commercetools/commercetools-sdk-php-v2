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
 * @extends MessageCollection<RecurringOrderExpiresAtSetMessage>
 * @method RecurringOrderExpiresAtSetMessage current()
 * @method RecurringOrderExpiresAtSetMessage end()
 * @method RecurringOrderExpiresAtSetMessage at($offset)
 */
class RecurringOrderExpiresAtSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderExpiresAtSetMessage $value
     * @psalm-param RecurringOrderExpiresAtSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderExpiresAtSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderExpiresAtSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderExpiresAtSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderExpiresAtSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderExpiresAtSetMessage $data */
                $data = RecurringOrderExpiresAtSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
