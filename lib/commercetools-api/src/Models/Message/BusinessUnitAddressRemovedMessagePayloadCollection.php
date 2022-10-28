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
 * @extends MessagePayloadCollection<BusinessUnitAddressRemovedMessagePayload>
 * @method BusinessUnitAddressRemovedMessagePayload current()
 * @method BusinessUnitAddressRemovedMessagePayload end()
 * @method BusinessUnitAddressRemovedMessagePayload at($offset)
 */
class BusinessUnitAddressRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAddressRemovedMessagePayload $value
     * @psalm-param BusinessUnitAddressRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressRemovedMessagePayload $data */
                $data = BusinessUnitAddressRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
