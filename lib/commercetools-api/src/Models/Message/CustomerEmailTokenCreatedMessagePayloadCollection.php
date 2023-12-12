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
 * @extends MessagePayloadCollection<CustomerEmailTokenCreatedMessagePayload>
 * @method CustomerEmailTokenCreatedMessagePayload current()
 * @method CustomerEmailTokenCreatedMessagePayload end()
 * @method CustomerEmailTokenCreatedMessagePayload at($offset)
 */
class CustomerEmailTokenCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerEmailTokenCreatedMessagePayload $value
     * @psalm-param CustomerEmailTokenCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailTokenCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailTokenCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailTokenCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerEmailTokenCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerEmailTokenCreatedMessagePayload $data */
                $data = CustomerEmailTokenCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
