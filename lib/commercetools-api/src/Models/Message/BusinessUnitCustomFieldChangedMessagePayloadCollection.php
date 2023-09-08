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
 * @extends MessagePayloadCollection<BusinessUnitCustomFieldChangedMessagePayload>
 * @method BusinessUnitCustomFieldChangedMessagePayload current()
 * @method BusinessUnitCustomFieldChangedMessagePayload end()
 * @method BusinessUnitCustomFieldChangedMessagePayload at($offset)
 */
class BusinessUnitCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCustomFieldChangedMessagePayload $value
     * @psalm-param BusinessUnitCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomFieldChangedMessagePayload $data */
                $data = BusinessUnitCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
