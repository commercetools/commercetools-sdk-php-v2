<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessagePayloadCollection<OrderBusinessUnitSetMessagePayload>
 * @method OrderBusinessUnitSetMessagePayload current()
 * @method OrderBusinessUnitSetMessagePayload end()
 * @method OrderBusinessUnitSetMessagePayload at($offset)
 */
class OrderBusinessUnitSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderBusinessUnitSetMessagePayload $value
     * @psalm-param OrderBusinessUnitSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderBusinessUnitSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderBusinessUnitSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderBusinessUnitSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderBusinessUnitSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderBusinessUnitSetMessagePayload $data */
                $data = OrderBusinessUnitSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
