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
 * @extends MessagePayloadCollection<CustomerDeletedMessagePayload>
 * @method CustomerDeletedMessagePayload current()
 * @method CustomerDeletedMessagePayload end()
 * @method CustomerDeletedMessagePayload at($offset)
 */
class CustomerDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerDeletedMessagePayload $value
     * @psalm-param CustomerDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDeletedMessagePayload $data */
                $data = CustomerDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
