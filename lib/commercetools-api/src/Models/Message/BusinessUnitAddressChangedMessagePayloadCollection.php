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
 * @extends MessagePayloadCollection<BusinessUnitAddressChangedMessagePayload>
 * @method BusinessUnitAddressChangedMessagePayload current()
 * @method BusinessUnitAddressChangedMessagePayload end()
 * @method BusinessUnitAddressChangedMessagePayload at($offset)
 */
class BusinessUnitAddressChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAddressChangedMessagePayload $value
     * @psalm-param BusinessUnitAddressChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressChangedMessagePayload $data */
                $data = BusinessUnitAddressChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
