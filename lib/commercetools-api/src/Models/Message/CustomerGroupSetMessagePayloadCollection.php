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
 * @extends MapperSequence<CustomerGroupSetMessagePayload>
 *
 * @method CustomerGroupSetMessagePayload current()
 * @method CustomerGroupSetMessagePayload at($offset)
 */
class CustomerGroupSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupSetMessagePayload $value
     * @psalm-param CustomerGroupSetMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
