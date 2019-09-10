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
 * @extends MapperSequence<CustomerDateOfBirthSetMessagePayload>
 *
 * @method CustomerDateOfBirthSetMessagePayload current()
 * @method CustomerDateOfBirthSetMessagePayload at($offset)
 */
class CustomerDateOfBirthSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerDateOfBirthSetMessagePayload $value
     * @psalm-param CustomerDateOfBirthSetMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?CustomerDateOfBirthSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerDateOfBirthSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
