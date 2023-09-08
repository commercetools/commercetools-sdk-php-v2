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
 * @extends MessagePayloadCollection<BusinessUnitCustomTypeRemovedMessagePayload>
 * @method BusinessUnitCustomTypeRemovedMessagePayload current()
 * @method BusinessUnitCustomTypeRemovedMessagePayload end()
 * @method BusinessUnitCustomTypeRemovedMessagePayload at($offset)
 */
class BusinessUnitCustomTypeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCustomTypeRemovedMessagePayload $value
     * @psalm-param BusinessUnitCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomTypeRemovedMessagePayload $data */
                $data = BusinessUnitCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
