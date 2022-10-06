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
 * @extends MessagePayloadCollection<BusinessUnitDefaultShippingAddressSetMessagePayload>
 * @method BusinessUnitDefaultShippingAddressSetMessagePayload current()
 * @method BusinessUnitDefaultShippingAddressSetMessagePayload end()
 * @method BusinessUnitDefaultShippingAddressSetMessagePayload at($offset)
 */
class BusinessUnitDefaultShippingAddressSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitDefaultShippingAddressSetMessagePayload $value
     * @psalm-param BusinessUnitDefaultShippingAddressSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitDefaultShippingAddressSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitDefaultShippingAddressSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitDefaultShippingAddressSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitDefaultShippingAddressSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitDefaultShippingAddressSetMessagePayload $data */
                $data = BusinessUnitDefaultShippingAddressSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
