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
 * @extends MessagePayloadCollection<CustomerFirstNameSetMessagePayload>
 * @method CustomerFirstNameSetMessagePayload current()
 * @method CustomerFirstNameSetMessagePayload end()
 * @method CustomerFirstNameSetMessagePayload at($offset)
 */
class CustomerFirstNameSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerFirstNameSetMessagePayload $value
     * @psalm-param CustomerFirstNameSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerFirstNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerFirstNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerFirstNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerFirstNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerFirstNameSetMessagePayload $data */
                $data = CustomerFirstNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
