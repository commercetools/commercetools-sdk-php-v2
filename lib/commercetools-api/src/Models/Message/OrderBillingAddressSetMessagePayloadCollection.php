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
 * @extends MapperSequence<OrderBillingAddressSetMessagePayload>
 *
 * @method OrderBillingAddressSetMessagePayload current()
 * @method OrderBillingAddressSetMessagePayload at($offset)
 */
class OrderBillingAddressSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderBillingAddressSetMessagePayload $value
     * @psalm-param OrderBillingAddressSetMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderBillingAddressSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderBillingAddressSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderBillingAddressSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderBillingAddressSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderBillingAddressSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
