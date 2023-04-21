<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderSearchQueryExpressionValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderSearchQueryExpressionValueCollection<OrderSearchLongRangeValue>
 * @method OrderSearchLongRangeValue current()
 * @method OrderSearchLongRangeValue end()
 * @method OrderSearchLongRangeValue at($offset)
 */
class OrderSearchLongRangeValueCollection extends OrderSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert OrderSearchLongRangeValue $value
     * @psalm-param OrderSearchLongRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchLongRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchLongRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchLongRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchLongRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchLongRangeValue $data */
                $data = OrderSearchLongRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
