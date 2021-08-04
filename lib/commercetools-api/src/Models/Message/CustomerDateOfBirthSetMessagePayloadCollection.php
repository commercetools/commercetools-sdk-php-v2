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
 * @extends MessagePayloadCollection<CustomerDateOfBirthSetMessagePayload>
 * @method CustomerDateOfBirthSetMessagePayload current()
 * @method CustomerDateOfBirthSetMessagePayload at($offset)
 */
class CustomerDateOfBirthSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerDateOfBirthSetMessagePayload $value
     * @psalm-param CustomerDateOfBirthSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDateOfBirthSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDateOfBirthSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDateOfBirthSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerDateOfBirthSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDateOfBirthSetMessagePayload $data */
                $data = CustomerDateOfBirthSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
