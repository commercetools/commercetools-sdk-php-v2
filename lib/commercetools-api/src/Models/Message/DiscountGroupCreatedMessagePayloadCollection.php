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
 * @extends MessagePayloadCollection<DiscountGroupCreatedMessagePayload>
 * @method DiscountGroupCreatedMessagePayload current()
 * @method DiscountGroupCreatedMessagePayload end()
 * @method DiscountGroupCreatedMessagePayload at($offset)
 */
class DiscountGroupCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DiscountGroupCreatedMessagePayload $value
     * @psalm-param DiscountGroupCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupCreatedMessagePayload $data */
                $data = DiscountGroupCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
