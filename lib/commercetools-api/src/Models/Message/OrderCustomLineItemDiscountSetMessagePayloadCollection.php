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
 * @extends MapperSequence<OrderCustomLineItemDiscountSetMessagePayload>
 * @method OrderCustomLineItemDiscountSetMessagePayload current()
 * @method OrderCustomLineItemDiscountSetMessagePayload at($offset)
 */
class OrderCustomLineItemDiscountSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderCustomLineItemDiscountSetMessagePayload $value
     * @psalm-param OrderCustomLineItemDiscountSetMessagePayload|stdClass $value
     * @return OrderCustomLineItemDiscountSetMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemDiscountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemDiscountSetMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?OrderCustomLineItemDiscountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderCustomLineItemDiscountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}