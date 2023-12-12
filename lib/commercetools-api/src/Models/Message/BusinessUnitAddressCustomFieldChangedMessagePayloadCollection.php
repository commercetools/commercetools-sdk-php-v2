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
 * @extends MessagePayloadCollection<BusinessUnitAddressCustomFieldChangedMessagePayload>
 * @method BusinessUnitAddressCustomFieldChangedMessagePayload current()
 * @method BusinessUnitAddressCustomFieldChangedMessagePayload end()
 * @method BusinessUnitAddressCustomFieldChangedMessagePayload at($offset)
 */
class BusinessUnitAddressCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomFieldChangedMessagePayload $value
     * @psalm-param BusinessUnitAddressCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomFieldChangedMessagePayload $data */
                $data = BusinessUnitAddressCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
