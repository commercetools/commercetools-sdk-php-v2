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
 * @extends OrderMessageCollection<OrderCustomFieldChangedMessage>
 * @method OrderCustomFieldChangedMessage current()
 * @method OrderCustomFieldChangedMessage end()
 * @method OrderCustomFieldChangedMessage at($offset)
 */
class OrderCustomFieldChangedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomFieldChangedMessage $value
     * @psalm-param OrderCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomFieldChangedMessage $data */
                $data = OrderCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
