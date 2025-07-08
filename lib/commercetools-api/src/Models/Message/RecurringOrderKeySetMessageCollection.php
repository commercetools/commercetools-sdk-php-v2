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
 * @extends MessageCollection<RecurringOrderKeySetMessage>
 * @method RecurringOrderKeySetMessage current()
 * @method RecurringOrderKeySetMessage end()
 * @method RecurringOrderKeySetMessage at($offset)
 */
class RecurringOrderKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderKeySetMessage $value
     * @psalm-param RecurringOrderKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderKeySetMessage $data */
                $data = RecurringOrderKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
