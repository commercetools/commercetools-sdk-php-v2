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
 * @extends MessagePayloadCollection<CustomerEmailChangedMessagePayload>
 * @method CustomerEmailChangedMessagePayload current()
 * @method CustomerEmailChangedMessagePayload at($offset)
 */
class CustomerEmailChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerEmailChangedMessagePayload $value
     * @psalm-param CustomerEmailChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerEmailChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerEmailChangedMessagePayload $data */
                $data = CustomerEmailChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
