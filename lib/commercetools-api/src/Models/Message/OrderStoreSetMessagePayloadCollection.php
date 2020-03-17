<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderStoreSetMessagePayload>
 * @method OrderStoreSetMessagePayload current()
 * @method OrderStoreSetMessagePayload at($offset)
 */
class OrderStoreSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderStoreSetMessagePayload $value
     * @psalm-param OrderStoreSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderStoreSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderStoreSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderStoreSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderStoreSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderStoreSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
