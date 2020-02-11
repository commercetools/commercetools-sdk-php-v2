<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderCustomLineItemDiscountSetMessage>
 * @method OrderCustomLineItemDiscountSetMessage current()
 * @method OrderCustomLineItemDiscountSetMessage at($offset)
 */
class OrderCustomLineItemDiscountSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderCustomLineItemDiscountSetMessage $value
     * @psalm-param OrderCustomLineItemDiscountSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomLineItemDiscountSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemDiscountSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemDiscountSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?OrderCustomLineItemDiscountSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderCustomLineItemDiscountSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
