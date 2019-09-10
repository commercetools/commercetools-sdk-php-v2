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
 * @extends MapperSequence<OrderLineItemDiscountSetMessagePayload>
 * @method OrderLineItemDiscountSetMessagePayload current()
 * @method OrderLineItemDiscountSetMessagePayload at($offset)
 */
class OrderLineItemDiscountSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderLineItemDiscountSetMessagePayload $value
     * @psalm-param OrderLineItemDiscountSetMessagePayload|stdClass $value
     * @return OrderLineItemDiscountSetMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemDiscountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemDiscountSetMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?OrderLineItemDiscountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderLineItemDiscountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}