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
 * @extends MessageCollection<CustomerEmailVerifiedMessage>
 * @method CustomerEmailVerifiedMessage current()
 * @method CustomerEmailVerifiedMessage at($offset)
 */
class CustomerEmailVerifiedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerEmailVerifiedMessage $value
     * @psalm-param CustomerEmailVerifiedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailVerifiedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailVerifiedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailVerifiedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerEmailVerifiedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerEmailVerifiedMessage $data */
                $data = CustomerEmailVerifiedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
