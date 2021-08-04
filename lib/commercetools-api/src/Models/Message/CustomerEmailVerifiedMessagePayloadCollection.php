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
 * @extends MessagePayloadCollection<CustomerEmailVerifiedMessagePayload>
 * @method CustomerEmailVerifiedMessagePayload current()
 * @method CustomerEmailVerifiedMessagePayload end()
 * @method CustomerEmailVerifiedMessagePayload at($offset)
 */
class CustomerEmailVerifiedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerEmailVerifiedMessagePayload $value
     * @psalm-param CustomerEmailVerifiedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailVerifiedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailVerifiedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailVerifiedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerEmailVerifiedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerEmailVerifiedMessagePayload $data */
                $data = CustomerEmailVerifiedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
