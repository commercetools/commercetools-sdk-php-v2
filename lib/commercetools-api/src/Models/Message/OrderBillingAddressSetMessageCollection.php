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
 * @extends MapperSequence<OrderBillingAddressSetMessage>
 * @method OrderBillingAddressSetMessage current()
 * @method OrderBillingAddressSetMessage at($offset)
 */
class OrderBillingAddressSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderBillingAddressSetMessage $value
     * @psalm-param OrderBillingAddressSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderBillingAddressSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderBillingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderBillingAddressSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?OrderBillingAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderBillingAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
