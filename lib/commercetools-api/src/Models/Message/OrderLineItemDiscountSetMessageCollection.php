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
 * @extends MapperSequence<OrderLineItemDiscountSetMessage>
 * @method OrderLineItemDiscountSetMessage current()
 * @method OrderLineItemDiscountSetMessage at($offset)
 */
class OrderLineItemDiscountSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderLineItemDiscountSetMessage $value
     * @psalm-param OrderLineItemDiscountSetMessage|stdClass $value
     * @return OrderLineItemDiscountSetMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemDiscountSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemDiscountSetMessage
     */
    protected function mapper()
    {
        return function(int $index): ?OrderLineItemDiscountSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderLineItemDiscountSetMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}