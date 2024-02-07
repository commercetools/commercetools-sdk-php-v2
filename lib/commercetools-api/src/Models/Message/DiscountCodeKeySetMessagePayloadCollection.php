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
 * @extends MessagePayloadCollection<DiscountCodeKeySetMessagePayload>
 * @method DiscountCodeKeySetMessagePayload current()
 * @method DiscountCodeKeySetMessagePayload end()
 * @method DiscountCodeKeySetMessagePayload at($offset)
 */
class DiscountCodeKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DiscountCodeKeySetMessagePayload $value
     * @psalm-param DiscountCodeKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeKeySetMessagePayload $data */
                $data = DiscountCodeKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
