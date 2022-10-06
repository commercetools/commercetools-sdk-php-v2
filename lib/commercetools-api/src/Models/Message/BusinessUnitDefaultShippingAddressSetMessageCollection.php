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
 * @extends MessageCollection<BusinessUnitDefaultShippingAddressSetMessage>
 * @method BusinessUnitDefaultShippingAddressSetMessage current()
 * @method BusinessUnitDefaultShippingAddressSetMessage end()
 * @method BusinessUnitDefaultShippingAddressSetMessage at($offset)
 */
class BusinessUnitDefaultShippingAddressSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitDefaultShippingAddressSetMessage $value
     * @psalm-param BusinessUnitDefaultShippingAddressSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitDefaultShippingAddressSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitDefaultShippingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitDefaultShippingAddressSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitDefaultShippingAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitDefaultShippingAddressSetMessage $data */
                $data = BusinessUnitDefaultShippingAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
