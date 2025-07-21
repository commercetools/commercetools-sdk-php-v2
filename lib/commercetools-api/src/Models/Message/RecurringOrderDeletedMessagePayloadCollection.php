<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<RecurringOrderDeletedMessagePayload>
 * @method RecurringOrderDeletedMessagePayload current()
 * @method RecurringOrderDeletedMessagePayload end()
 * @method RecurringOrderDeletedMessagePayload at($offset)
 */
class RecurringOrderDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert RecurringOrderDeletedMessagePayload $value
     * @psalm-param RecurringOrderDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderDeletedMessagePayload $data */
                $data = RecurringOrderDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
