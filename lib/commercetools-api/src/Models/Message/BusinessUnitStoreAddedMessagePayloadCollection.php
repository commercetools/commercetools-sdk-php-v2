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
 * @extends MessagePayloadCollection<BusinessUnitStoreAddedMessagePayload>
 * @method BusinessUnitStoreAddedMessagePayload current()
 * @method BusinessUnitStoreAddedMessagePayload end()
 * @method BusinessUnitStoreAddedMessagePayload at($offset)
 */
class BusinessUnitStoreAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitStoreAddedMessagePayload $value
     * @psalm-param BusinessUnitStoreAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStoreAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStoreAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStoreAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStoreAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStoreAddedMessagePayload $data */
                $data = BusinessUnitStoreAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
