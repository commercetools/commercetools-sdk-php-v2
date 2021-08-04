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
 * @extends MessagePayloadCollection<OrderEditAppliedMessagePayload>
 * @method OrderEditAppliedMessagePayload current()
 * @method OrderEditAppliedMessagePayload at($offset)
 */
class OrderEditAppliedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderEditAppliedMessagePayload $value
     * @psalm-param OrderEditAppliedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditAppliedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditAppliedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditAppliedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderEditAppliedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditAppliedMessagePayload $data */
                $data = OrderEditAppliedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
