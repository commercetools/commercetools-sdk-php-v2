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
 * @extends MessagePayloadCollection<DiscountCodeCreatedMessagePayload>
 * @method DiscountCodeCreatedMessagePayload current()
 * @method DiscountCodeCreatedMessagePayload end()
 * @method DiscountCodeCreatedMessagePayload at($offset)
 */
class DiscountCodeCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DiscountCodeCreatedMessagePayload $value
     * @psalm-param DiscountCodeCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeCreatedMessagePayload $data */
                $data = DiscountCodeCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
