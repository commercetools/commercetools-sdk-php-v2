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
 * @extends MessagePayloadCollection<CustomerExternalIdSetMessagePayload>
 * @method CustomerExternalIdSetMessagePayload current()
 * @method CustomerExternalIdSetMessagePayload end()
 * @method CustomerExternalIdSetMessagePayload at($offset)
 */
class CustomerExternalIdSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerExternalIdSetMessagePayload $value
     * @psalm-param CustomerExternalIdSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerExternalIdSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerExternalIdSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerExternalIdSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerExternalIdSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerExternalIdSetMessagePayload $data */
                $data = CustomerExternalIdSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
