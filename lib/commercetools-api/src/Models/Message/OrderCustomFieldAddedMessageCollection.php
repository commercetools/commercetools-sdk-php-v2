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
 * @extends OrderMessageCollection<OrderCustomFieldAddedMessage>
 * @method OrderCustomFieldAddedMessage current()
 * @method OrderCustomFieldAddedMessage end()
 * @method OrderCustomFieldAddedMessage at($offset)
 */
class OrderCustomFieldAddedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomFieldAddedMessage $value
     * @psalm-param OrderCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomFieldAddedMessage $data */
                $data = OrderCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
