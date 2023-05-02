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
 * @extends OrderSearchQueryExpressionCollection<OrderSearchNumberRangeExpression>
 * @method OrderSearchNumberRangeExpression current()
 * @method OrderSearchNumberRangeExpression end()
 * @method OrderSearchNumberRangeExpression at($offset)
 */
class OrderSearchNumberRangeExpressionCollection extends OrderSearchQueryExpressionCollection
{
    /**
     * @psalm-assert OrderSearchNumberRangeExpression $value
     * @psalm-param OrderSearchNumberRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchNumberRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchNumberRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchNumberRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchNumberRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchNumberRangeExpression $data */
                $data = OrderSearchNumberRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
