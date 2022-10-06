<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<BusinessUnitShippingAddressRemovedMessagePayload>
 * @method BusinessUnitShippingAddressRemovedMessagePayload current()
 * @method BusinessUnitShippingAddressRemovedMessagePayload end()
 * @method BusinessUnitShippingAddressRemovedMessagePayload at($offset)
 */
class BusinessUnitShippingAddressRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitShippingAddressRemovedMessagePayload $value
     * @psalm-param BusinessUnitShippingAddressRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitShippingAddressRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitShippingAddressRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitShippingAddressRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitShippingAddressRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitShippingAddressRemovedMessagePayload $data */
                $data = BusinessUnitShippingAddressRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
