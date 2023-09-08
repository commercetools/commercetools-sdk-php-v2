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
 * @extends MessagePayloadCollection<BusinessUnitAddressCustomTypeRemovedMessagePayload>
 * @method BusinessUnitAddressCustomTypeRemovedMessagePayload current()
 * @method BusinessUnitAddressCustomTypeRemovedMessagePayload end()
 * @method BusinessUnitAddressCustomTypeRemovedMessagePayload at($offset)
 */
class BusinessUnitAddressCustomTypeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomTypeRemovedMessagePayload $value
     * @psalm-param BusinessUnitAddressCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomTypeRemovedMessagePayload $data */
                $data = BusinessUnitAddressCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
