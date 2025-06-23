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
 * @extends MessagePayloadCollection<DiscountGroupKeySetMessagePayload>
 * @method DiscountGroupKeySetMessagePayload current()
 * @method DiscountGroupKeySetMessagePayload end()
 * @method DiscountGroupKeySetMessagePayload at($offset)
 */
class DiscountGroupKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DiscountGroupKeySetMessagePayload $value
     * @psalm-param DiscountGroupKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupKeySetMessagePayload $data */
                $data = DiscountGroupKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
