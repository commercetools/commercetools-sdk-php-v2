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
 * @extends MessagePayloadCollection<BusinessUnitStoresSetMessagePayload>
 * @method BusinessUnitStoresSetMessagePayload current()
 * @method BusinessUnitStoresSetMessagePayload end()
 * @method BusinessUnitStoresSetMessagePayload at($offset)
 */
class BusinessUnitStoresSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitStoresSetMessagePayload $value
     * @psalm-param BusinessUnitStoresSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStoresSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStoresSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStoresSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStoresSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStoresSetMessagePayload $data */
                $data = BusinessUnitStoresSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
