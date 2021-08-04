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
 * @extends MessageCollection<CustomerDateOfBirthSetMessage>
 * @method CustomerDateOfBirthSetMessage current()
 * @method CustomerDateOfBirthSetMessage end()
 * @method CustomerDateOfBirthSetMessage at($offset)
 */
class CustomerDateOfBirthSetMessageCollection extends MessageCollection
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
        return function (?int $index): ?CustomerDateOfBirthSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDateOfBirthSetMessage $data */
                $data = CustomerDateOfBirthSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
