<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<OrderCustomFieldRemovedMessage>
 * @method OrderCustomFieldRemovedMessage current()
 * @method OrderCustomFieldRemovedMessage end()
 * @method OrderCustomFieldRemovedMessage at($offset)
 */
class OrderCustomFieldRemovedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomFieldRemovedMessage $value
     * @psalm-param OrderCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomFieldRemovedMessage $data */
                $data = OrderCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
