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
 * @extends MessagePayloadCollection<DiscountGroupDeletedMessagePayload>
 * @method DiscountGroupDeletedMessagePayload current()
 * @method DiscountGroupDeletedMessagePayload end()
 * @method DiscountGroupDeletedMessagePayload at($offset)
 */
class DiscountGroupDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DiscountGroupDeletedMessagePayload $value
     * @psalm-param DiscountGroupDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupDeletedMessagePayload $data */
                $data = DiscountGroupDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
