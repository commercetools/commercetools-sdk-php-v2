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
 * @extends MapperSequence<OrderReturnInfoAddedMessage>
 * @method OrderReturnInfoAddedMessage current()
 * @method OrderReturnInfoAddedMessage at($offset)
 */
class OrderReturnInfoAddedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderReturnInfoAddedMessage $value
     * @psalm-param OrderReturnInfoAddedMessage|stdClass $value
     * @return OrderReturnInfoAddedMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderReturnInfoAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReturnInfoAddedMessage
     */
    protected function mapper()
    {
        return function(int $index): ?OrderReturnInfoAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderReturnInfoAddedMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}