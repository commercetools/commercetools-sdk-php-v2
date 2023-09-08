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
 * @extends MessagePayloadCollection<BusinessUnitCustomFieldRemovedMessagePayload>
 * @method BusinessUnitCustomFieldRemovedMessagePayload current()
 * @method BusinessUnitCustomFieldRemovedMessagePayload end()
 * @method BusinessUnitCustomFieldRemovedMessagePayload at($offset)
 */
class BusinessUnitCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCustomFieldRemovedMessagePayload $value
     * @psalm-param BusinessUnitCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomFieldRemovedMessagePayload $data */
                $data = BusinessUnitCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
