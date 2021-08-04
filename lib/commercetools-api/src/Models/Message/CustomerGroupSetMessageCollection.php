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
 * @extends MessageCollection<CustomerGroupSetMessage>
 * @method CustomerGroupSetMessage current()
 * @method CustomerGroupSetMessage at($offset)
 */
class CustomerGroupSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupSetMessage $value
     * @psalm-param CustomerGroupSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupSetMessage $data */
                $data = CustomerGroupSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
