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
 * @extends MessageCollection<CustomerEmailChangedMessage>
 * @method CustomerEmailChangedMessage current()
 * @method CustomerEmailChangedMessage end()
 * @method CustomerEmailChangedMessage at($offset)
 */
class CustomerEmailChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerEmailChangedMessage $value
     * @psalm-param CustomerEmailChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerEmailChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerEmailChangedMessage $data */
                $data = CustomerEmailChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
