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
 * @extends MessagePayloadCollection<DiscountCodeDeletedMessagePayload>
 * @method DiscountCodeDeletedMessagePayload current()
 * @method DiscountCodeDeletedMessagePayload end()
 * @method DiscountCodeDeletedMessagePayload at($offset)
 */
class DiscountCodeDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DiscountCodeDeletedMessagePayload $value
     * @psalm-param DiscountCodeDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeDeletedMessagePayload $data */
                $data = DiscountCodeDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
