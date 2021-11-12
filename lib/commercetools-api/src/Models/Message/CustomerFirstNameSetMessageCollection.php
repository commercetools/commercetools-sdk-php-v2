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
 * @extends MessageCollection<CustomerFirstNameSetMessage>
 * @method CustomerFirstNameSetMessage current()
 * @method CustomerFirstNameSetMessage end()
 * @method CustomerFirstNameSetMessage at($offset)
 */
class CustomerFirstNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerFirstNameSetMessage $value
     * @psalm-param CustomerFirstNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerFirstNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerFirstNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerFirstNameSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerFirstNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerFirstNameSetMessage $data */
                $data = CustomerFirstNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
