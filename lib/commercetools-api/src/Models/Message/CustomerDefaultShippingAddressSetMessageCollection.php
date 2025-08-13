<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<CustomerDefaultShippingAddressSetMessage>
 * @method CustomerDefaultShippingAddressSetMessage current()
 * @method CustomerDefaultShippingAddressSetMessage end()
 * @method CustomerDefaultShippingAddressSetMessage at($offset)
 */
class CustomerDefaultShippingAddressSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerDefaultShippingAddressSetMessage $value
     * @psalm-param CustomerDefaultShippingAddressSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDefaultShippingAddressSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDefaultShippingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDefaultShippingAddressSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerDefaultShippingAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDefaultShippingAddressSetMessage $data */
                $data = CustomerDefaultShippingAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
