<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderSearchQueryExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderSearchQueryExpressionCollection<OrderSearchLongRangeExpression>
 * @method OrderSearchLongRangeExpression current()
 * @method OrderSearchLongRangeExpression end()
 * @method OrderSearchLongRangeExpression at($offset)
 */
class OrderSearchLongRangeExpressionCollection extends OrderSearchQueryExpressionCollection
{
    /**
     * @psalm-assert OrderSearchLongRangeExpression $value
     * @psalm-param OrderSearchLongRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchLongRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchLongRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchLongRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchLongRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchLongRangeExpression $data */
                $data = OrderSearchLongRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
