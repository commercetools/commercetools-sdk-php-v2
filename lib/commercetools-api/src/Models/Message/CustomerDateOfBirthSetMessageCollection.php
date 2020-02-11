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
 * @extends MapperSequence<CustomerDateOfBirthSetMessage>
 * @method CustomerDateOfBirthSetMessage current()
 * @method CustomerDateOfBirthSetMessage at($offset)
 */
class CustomerDateOfBirthSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerDateOfBirthSetMessage $value
     * @psalm-param CustomerDateOfBirthSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDateOfBirthSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDateOfBirthSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDateOfBirthSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerDateOfBirthSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerDateOfBirthSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
