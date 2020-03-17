<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderStoreSetMessage>
 * @method OrderStoreSetMessage current()
 * @method OrderStoreSetMessage at($offset)
 */
class OrderStoreSetMessageCollection extends MapperSequence
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
        return function (int $index): ?OrderStoreSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderStoreSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
