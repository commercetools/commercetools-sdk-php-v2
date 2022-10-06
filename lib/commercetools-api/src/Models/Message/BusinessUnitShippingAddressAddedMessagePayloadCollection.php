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
 * @extends MessagePayloadCollection<BusinessUnitShippingAddressAddedMessagePayload>
 * @method BusinessUnitShippingAddressAddedMessagePayload current()
 * @method BusinessUnitShippingAddressAddedMessagePayload end()
 * @method BusinessUnitShippingAddressAddedMessagePayload at($offset)
 */
class BusinessUnitShippingAddressAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitShippingAddressAddedMessagePayload $value
     * @psalm-param BusinessUnitShippingAddressAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitShippingAddressAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitShippingAddressAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitShippingAddressAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitShippingAddressAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitShippingAddressAddedMessagePayload $data */
                $data = BusinessUnitShippingAddressAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
