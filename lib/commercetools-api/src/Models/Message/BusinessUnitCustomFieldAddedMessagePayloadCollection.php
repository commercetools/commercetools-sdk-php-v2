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
 * @extends MessagePayloadCollection<BusinessUnitCustomFieldAddedMessagePayload>
 * @method BusinessUnitCustomFieldAddedMessagePayload current()
 * @method BusinessUnitCustomFieldAddedMessagePayload end()
 * @method BusinessUnitCustomFieldAddedMessagePayload at($offset)
 */
class BusinessUnitCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCustomFieldAddedMessagePayload $value
     * @psalm-param BusinessUnitCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomFieldAddedMessagePayload $data */
                $data = BusinessUnitCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
