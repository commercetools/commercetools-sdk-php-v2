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
 * @extends MapperSequence<OrderDiscountCodeAddedMessage>
 * @method OrderDiscountCodeAddedMessage current()
 * @method OrderDiscountCodeAddedMessage at($offset)
 */
class OrderDiscountCodeAddedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderDiscountCodeAddedMessage $value
     * @psalm-param OrderDiscountCodeAddedMessage|stdClass $value
     * @return OrderDiscountCodeAddedMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderDiscountCodeAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDiscountCodeAddedMessage
     */
    protected function mapper()
    {
        return function(int $index): ?OrderDiscountCodeAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderDiscountCodeAddedMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}