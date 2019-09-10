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
 * @extends MapperSequence<OrderDeletedMessagePayload>
 *
 * @method OrderDeletedMessagePayload current()
 * @method OrderDeletedMessagePayload at($offset)
 */
class OrderDeletedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderDeletedMessagePayload $value
     * @psalm-param OrderDeletedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
