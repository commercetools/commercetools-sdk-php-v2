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
 * @extends MessagePayloadCollection<BusinessUnitAddressCustomFieldAddedMessagePayload>
 * @method BusinessUnitAddressCustomFieldAddedMessagePayload current()
 * @method BusinessUnitAddressCustomFieldAddedMessagePayload end()
 * @method BusinessUnitAddressCustomFieldAddedMessagePayload at($offset)
 */
class BusinessUnitAddressCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomFieldAddedMessagePayload $value
     * @psalm-param BusinessUnitAddressCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomFieldAddedMessagePayload $data */
                $data = BusinessUnitAddressCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
