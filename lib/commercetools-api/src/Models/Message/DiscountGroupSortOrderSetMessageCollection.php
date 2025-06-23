<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<DiscountGroupSortOrderSetMessage>
 * @method DiscountGroupSortOrderSetMessage current()
 * @method DiscountGroupSortOrderSetMessage end()
 * @method DiscountGroupSortOrderSetMessage at($offset)
 */
class DiscountGroupSortOrderSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DiscountGroupSortOrderSetMessage $value
     * @psalm-param DiscountGroupSortOrderSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupSortOrderSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupSortOrderSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupSortOrderSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupSortOrderSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupSortOrderSetMessage $data */
                $data = DiscountGroupSortOrderSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
