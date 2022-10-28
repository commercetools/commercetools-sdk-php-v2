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
 * @extends MessageCollection<BusinessUnitShippingAddressAddedMessage>
 * @method BusinessUnitShippingAddressAddedMessage current()
 * @method BusinessUnitShippingAddressAddedMessage end()
 * @method BusinessUnitShippingAddressAddedMessage at($offset)
 */
class BusinessUnitShippingAddressAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitShippingAddressAddedMessage $value
     * @psalm-param BusinessUnitShippingAddressAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitShippingAddressAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitShippingAddressAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitShippingAddressAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitShippingAddressAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitShippingAddressAddedMessage $data */
                $data = BusinessUnitShippingAddressAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
