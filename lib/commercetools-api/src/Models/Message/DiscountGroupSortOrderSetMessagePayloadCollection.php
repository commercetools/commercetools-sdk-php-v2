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
 * @extends MessagePayloadCollection<DiscountGroupSortOrderSetMessagePayload>
 * @method DiscountGroupSortOrderSetMessagePayload current()
 * @method DiscountGroupSortOrderSetMessagePayload end()
 * @method DiscountGroupSortOrderSetMessagePayload at($offset)
 */
class DiscountGroupSortOrderSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DiscountGroupSortOrderSetMessagePayload $value
     * @psalm-param DiscountGroupSortOrderSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupSortOrderSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupSortOrderSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupSortOrderSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupSortOrderSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupSortOrderSetMessagePayload $data */
                $data = DiscountGroupSortOrderSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
