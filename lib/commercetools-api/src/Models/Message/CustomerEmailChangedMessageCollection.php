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
 * @extends MapperSequence<CustomerEmailChangedMessage>
 * @method CustomerEmailChangedMessage current()
 * @method CustomerEmailChangedMessage at($offset)
 */
class CustomerEmailChangedMessageCollection extends MapperSequence
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
        return function (int $index): ?CustomerEmailChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerEmailChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
