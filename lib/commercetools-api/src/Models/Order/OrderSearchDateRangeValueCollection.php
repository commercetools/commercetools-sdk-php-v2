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
 * @extends OrderSearchQueryExpressionValueCollection<OrderSearchDateRangeValue>
 * @method OrderSearchDateRangeValue current()
 * @method OrderSearchDateRangeValue end()
 * @method OrderSearchDateRangeValue at($offset)
 */
class OrderSearchDateRangeValueCollection extends OrderSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert OrderSearchDateRangeValue $value
     * @psalm-param OrderSearchDateRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchDateRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchDateRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchDateRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchDateRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchDateRangeValue $data */
                $data = OrderSearchDateRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
