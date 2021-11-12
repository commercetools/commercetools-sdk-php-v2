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
 * @extends MessageCollection<CustomerLastNameSetMessage>
 * @method CustomerLastNameSetMessage current()
 * @method CustomerLastNameSetMessage end()
 * @method CustomerLastNameSetMessage at($offset)
 */
class CustomerLastNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerLastNameSetMessage $value
     * @psalm-param CustomerLastNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerLastNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerLastNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerLastNameSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerLastNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerLastNameSetMessage $data */
                $data = CustomerLastNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
