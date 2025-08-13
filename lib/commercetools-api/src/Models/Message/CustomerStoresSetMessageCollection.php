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
 * @extends MessageCollection<CustomerStoresSetMessage>
 * @method CustomerStoresSetMessage current()
 * @method CustomerStoresSetMessage end()
 * @method CustomerStoresSetMessage at($offset)
 */
class CustomerStoresSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerStoresSetMessage $value
     * @psalm-param CustomerStoresSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerStoresSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerStoresSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerStoresSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerStoresSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerStoresSetMessage $data */
                $data = CustomerStoresSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
