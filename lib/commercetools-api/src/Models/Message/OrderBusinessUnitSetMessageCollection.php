<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<OrderBusinessUnitSetMessage>
 * @method OrderBusinessUnitSetMessage current()
 * @method OrderBusinessUnitSetMessage end()
 * @method OrderBusinessUnitSetMessage at($offset)
 */
class OrderBusinessUnitSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderBusinessUnitSetMessage $value
     * @psalm-param OrderBusinessUnitSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderBusinessUnitSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderBusinessUnitSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderBusinessUnitSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderBusinessUnitSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderBusinessUnitSetMessage $data */
                $data = OrderBusinessUnitSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
