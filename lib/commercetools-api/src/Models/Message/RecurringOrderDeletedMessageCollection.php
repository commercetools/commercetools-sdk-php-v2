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
 * @extends MessageCollection<RecurringOrderDeletedMessage>
 * @method RecurringOrderDeletedMessage current()
 * @method RecurringOrderDeletedMessage end()
 * @method RecurringOrderDeletedMessage at($offset)
 */
class RecurringOrderDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert RecurringOrderDeletedMessage $value
     * @psalm-param RecurringOrderDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderDeletedMessage $data */
                $data = RecurringOrderDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
