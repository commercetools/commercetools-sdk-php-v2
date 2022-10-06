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
 * @extends MessagePayloadCollection<BusinessUnitAddressAddedMessagePayload>
 * @method BusinessUnitAddressAddedMessagePayload current()
 * @method BusinessUnitAddressAddedMessagePayload end()
 * @method BusinessUnitAddressAddedMessagePayload at($offset)
 */
class BusinessUnitAddressAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAddressAddedMessagePayload $value
     * @psalm-param BusinessUnitAddressAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressAddedMessagePayload $data */
                $data = BusinessUnitAddressAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
