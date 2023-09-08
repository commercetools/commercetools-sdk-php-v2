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
 * @extends MessagePayloadCollection<BusinessUnitAddressCustomTypeSetMessagePayload>
 * @method BusinessUnitAddressCustomTypeSetMessagePayload current()
 * @method BusinessUnitAddressCustomTypeSetMessagePayload end()
 * @method BusinessUnitAddressCustomTypeSetMessagePayload at($offset)
 */
class BusinessUnitAddressCustomTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomTypeSetMessagePayload $value
     * @psalm-param BusinessUnitAddressCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomTypeSetMessagePayload $data */
                $data = BusinessUnitAddressCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
