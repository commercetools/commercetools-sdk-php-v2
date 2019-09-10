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
 * @extends MapperSequence<OrderPaymentStateChangedMessagePayload>
 * @method OrderPaymentStateChangedMessagePayload current()
 * @method OrderPaymentStateChangedMessagePayload at($offset)
 */
class OrderPaymentStateChangedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderPaymentStateChangedMessagePayload $value
     * @psalm-param OrderPaymentStateChangedMessagePayload|stdClass $value
     * @return OrderPaymentStateChangedMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderPaymentStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPaymentStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?OrderPaymentStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderPaymentStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}