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
 * @extends MapperSequence<CustomerCreatedMessagePayload>
 *
 * @method CustomerCreatedMessagePayload current()
 * @method CustomerCreatedMessagePayload at($offset)
 */
class CustomerCreatedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerCreatedMessagePayload $value
     * @psalm-param CustomerCreatedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
