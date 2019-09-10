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
 * @extends MapperSequence<OrderLineItemAddedMessage>
 * @method OrderLineItemAddedMessage current()
 * @method OrderLineItemAddedMessage at($offset)
 */
class OrderLineItemAddedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderLineItemAddedMessage $value
     * @psalm-param OrderLineItemAddedMessage|stdClass $value
     * @return OrderLineItemAddedMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemAddedMessage
     */
    protected function mapper()
    {
        return function(int $index): ?OrderLineItemAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderLineItemAddedMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}