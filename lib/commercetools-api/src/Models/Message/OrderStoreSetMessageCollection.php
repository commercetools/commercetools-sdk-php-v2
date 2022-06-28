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
 * @extends OrderMessageCollection<OrderStoreSetMessage>
 * @method OrderStoreSetMessage current()
 * @method OrderStoreSetMessage end()
 * @method OrderStoreSetMessage at($offset)
 */
class OrderStoreSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderStoreSetMessage $value
     * @psalm-param OrderStoreSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderStoreSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderStoreSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderStoreSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderStoreSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderStoreSetMessage $data */
                $data = OrderStoreSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
