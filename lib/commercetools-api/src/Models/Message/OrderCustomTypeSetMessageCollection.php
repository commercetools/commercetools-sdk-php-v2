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
 * @extends OrderMessageCollection<OrderCustomTypeSetMessage>
 * @method OrderCustomTypeSetMessage current()
 * @method OrderCustomTypeSetMessage end()
 * @method OrderCustomTypeSetMessage at($offset)
 */
class OrderCustomTypeSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomTypeSetMessage $value
     * @psalm-param OrderCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomTypeSetMessage $data */
                $data = OrderCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
