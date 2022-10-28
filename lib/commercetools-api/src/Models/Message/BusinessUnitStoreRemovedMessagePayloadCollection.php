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
 * @extends MessagePayloadCollection<BusinessUnitStoreRemovedMessagePayload>
 * @method BusinessUnitStoreRemovedMessagePayload current()
 * @method BusinessUnitStoreRemovedMessagePayload end()
 * @method BusinessUnitStoreRemovedMessagePayload at($offset)
 */
class BusinessUnitStoreRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitStoreRemovedMessagePayload $value
     * @psalm-param BusinessUnitStoreRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStoreRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStoreRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStoreRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStoreRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStoreRemovedMessagePayload $data */
                $data = BusinessUnitStoreRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
