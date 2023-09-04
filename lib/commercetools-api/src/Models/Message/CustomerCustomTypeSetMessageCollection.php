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
 * @extends MessageCollection<CustomerCustomTypeSetMessage>
 * @method CustomerCustomTypeSetMessage current()
 * @method CustomerCustomTypeSetMessage end()
 * @method CustomerCustomTypeSetMessage at($offset)
 */
class CustomerCustomTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerCustomTypeSetMessage $value
     * @psalm-param CustomerCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomTypeSetMessage $data */
                $data = CustomerCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
