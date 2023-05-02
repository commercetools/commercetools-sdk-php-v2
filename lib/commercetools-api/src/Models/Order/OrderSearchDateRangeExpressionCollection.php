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
 * @extends OrderSearchQueryExpressionCollection<OrderSearchDateRangeExpression>
 * @method OrderSearchDateRangeExpression current()
 * @method OrderSearchDateRangeExpression end()
 * @method OrderSearchDateRangeExpression at($offset)
 */
class OrderSearchDateRangeExpressionCollection extends OrderSearchQueryExpressionCollection
{
    /**
     * @psalm-assert OrderSearchDateRangeExpression $value
     * @psalm-param OrderSearchDateRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchDateRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchDateRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchDateRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchDateRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchDateRangeExpression $data */
                $data = OrderSearchDateRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
