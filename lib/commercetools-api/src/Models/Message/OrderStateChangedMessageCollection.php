<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderStateChangedMessage>
 * @method OrderStateChangedMessage current()
 * @method OrderStateChangedMessage at($offset)
 */
class OrderStateChangedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderStateChangedMessage $value
     * @psalm-param OrderStateChangedMessage|stdClass $value
     * @return OrderStateChangedMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderStateChangedMessage
     */
    protected function mapper()
    {
        return function(int $index): ?OrderStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}