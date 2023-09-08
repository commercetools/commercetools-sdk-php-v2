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
 * @extends MessagePayloadCollection<BusinessUnitAddressCustomFieldRemovedMessagePayload>
 * @method BusinessUnitAddressCustomFieldRemovedMessagePayload current()
 * @method BusinessUnitAddressCustomFieldRemovedMessagePayload end()
 * @method BusinessUnitAddressCustomFieldRemovedMessagePayload at($offset)
 */
class BusinessUnitAddressCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomFieldRemovedMessagePayload $value
     * @psalm-param BusinessUnitAddressCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomFieldRemovedMessagePayload $data */
                $data = BusinessUnitAddressCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
