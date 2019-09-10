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
 * @extends MapperSequence<OrderEditAppliedMessage>
 *
 * @method OrderEditAppliedMessage current()
 * @method OrderEditAppliedMessage at($offset)
 */
class OrderEditAppliedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditAppliedMessage $value
     * @psalm-param OrderEditAppliedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderEditAppliedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditAppliedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditAppliedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditAppliedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditAppliedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
