<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderSearchCompoundExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderSearchCompoundExpressionCollection<OrderSearchOrExpression>
 * @method OrderSearchOrExpression current()
 * @method OrderSearchOrExpression end()
 * @method OrderSearchOrExpression at($offset)
 */
class OrderSearchOrExpressionCollection extends OrderSearchCompoundExpressionCollection
{
    /**
     * @psalm-assert OrderSearchOrExpression $value
     * @psalm-param OrderSearchOrExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchOrExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchOrExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchOrExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchOrExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchOrExpression $data */
                $data = OrderSearchOrExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
