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
 * @extends OrderSearchQueryExpressionValueCollection<OrderSearchNumberRangeValue>
 * @method OrderSearchNumberRangeValue current()
 * @method OrderSearchNumberRangeValue end()
 * @method OrderSearchNumberRangeValue at($offset)
 */
class OrderSearchNumberRangeValueCollection extends OrderSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert OrderSearchNumberRangeValue $value
     * @psalm-param OrderSearchNumberRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchNumberRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchNumberRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchNumberRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchNumberRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchNumberRangeValue $data */
                $data = OrderSearchNumberRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
