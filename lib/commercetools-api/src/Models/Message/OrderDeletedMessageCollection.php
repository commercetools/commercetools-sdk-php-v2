<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<OrderDeletedMessage>
 * @method OrderDeletedMessage current()
 * @method OrderDeletedMessage end()
 * @method OrderDeletedMessage at($offset)
 */
class OrderDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderDeletedMessage $value
     * @psalm-param OrderDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderDeletedMessage $data */
                $data = OrderDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
