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
 * @extends MessageCollection<RecurringOrderCustomTypeSetMessage>
 * @method RecurringOrderCustomTypeSetMessage current()
 * @method RecurringOrderCustomTypeSetMessage end()
 * @method RecurringOrderCustomTypeSetMessage at($offset)
 */
class RecurringOrderCustomTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderCustomTypeSetMessage $value
     * @psalm-param RecurringOrderCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCustomTypeSetMessage $data */
                $data = RecurringOrderCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
