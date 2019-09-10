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
 * @extends MapperSequence<OrderShippingAddressSetMessage>
 * @method OrderShippingAddressSetMessage current()
 * @method OrderShippingAddressSetMessage at($offset)
 */
class OrderShippingAddressSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderShippingAddressSetMessage $value
     * @psalm-param OrderShippingAddressSetMessage|stdClass $value
     * @return OrderShippingAddressSetMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderShippingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShippingAddressSetMessage
     */
    protected function mapper()
    {
        return function(int $index): ?OrderShippingAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderShippingAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}