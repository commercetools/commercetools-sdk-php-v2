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
 * @extends OrderMessageCollection<OrderReturnInfoSetMessage>
 * @method OrderReturnInfoSetMessage current()
 * @method OrderReturnInfoSetMessage end()
 * @method OrderReturnInfoSetMessage at($offset)
 */
class OrderReturnInfoSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderReturnInfoSetMessage $value
     * @psalm-param OrderReturnInfoSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderReturnInfoSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderReturnInfoSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReturnInfoSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderReturnInfoSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderReturnInfoSetMessage $data */
                $data = OrderReturnInfoSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
