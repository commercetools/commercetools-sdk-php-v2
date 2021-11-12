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
 * @extends MessagePayloadCollection<CustomerLastNameSetMessagePayload>
 * @method CustomerLastNameSetMessagePayload current()
 * @method CustomerLastNameSetMessagePayload end()
 * @method CustomerLastNameSetMessagePayload at($offset)
 */
class CustomerLastNameSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerLastNameSetMessagePayload $value
     * @psalm-param CustomerLastNameSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerLastNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerLastNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerLastNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerLastNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerLastNameSetMessagePayload $data */
                $data = CustomerLastNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
