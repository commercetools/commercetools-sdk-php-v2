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
 * @extends MessageCollection<CustomerGroupCustomTypeSetMessage>
 * @method CustomerGroupCustomTypeSetMessage current()
 * @method CustomerGroupCustomTypeSetMessage end()
 * @method CustomerGroupCustomTypeSetMessage at($offset)
 */
class CustomerGroupCustomTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupCustomTypeSetMessage $value
     * @psalm-param CustomerGroupCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomTypeSetMessage $data */
                $data = CustomerGroupCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
