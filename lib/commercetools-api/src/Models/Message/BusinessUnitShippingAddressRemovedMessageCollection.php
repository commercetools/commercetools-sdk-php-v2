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
 * @extends MessageCollection<BusinessUnitShippingAddressRemovedMessage>
 * @method BusinessUnitShippingAddressRemovedMessage current()
 * @method BusinessUnitShippingAddressRemovedMessage end()
 * @method BusinessUnitShippingAddressRemovedMessage at($offset)
 */
class BusinessUnitShippingAddressRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitShippingAddressRemovedMessage $value
     * @psalm-param BusinessUnitShippingAddressRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitShippingAddressRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitShippingAddressRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitShippingAddressRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitShippingAddressRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitShippingAddressRemovedMessage $data */
                $data = BusinessUnitShippingAddressRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
