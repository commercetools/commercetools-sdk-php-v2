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
 * @extends MessagePayloadCollection<DiscountGroupIsActiveSetMessagePayload>
 * @method DiscountGroupIsActiveSetMessagePayload current()
 * @method DiscountGroupIsActiveSetMessagePayload end()
 * @method DiscountGroupIsActiveSetMessagePayload at($offset)
 */
class DiscountGroupIsActiveSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DiscountGroupIsActiveSetMessagePayload $value
     * @psalm-param DiscountGroupIsActiveSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupIsActiveSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupIsActiveSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupIsActiveSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupIsActiveSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupIsActiveSetMessagePayload $data */
                $data = DiscountGroupIsActiveSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
