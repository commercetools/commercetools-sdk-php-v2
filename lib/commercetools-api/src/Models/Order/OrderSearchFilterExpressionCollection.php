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
 * @extends OrderSearchCompoundExpressionCollection<OrderSearchFilterExpression>
 * @method OrderSearchFilterExpression current()
 * @method OrderSearchFilterExpression end()
 * @method OrderSearchFilterExpression at($offset)
 */
class OrderSearchFilterExpressionCollection extends OrderSearchCompoundExpressionCollection
{
    /**
     * @psalm-assert OrderSearchFilterExpression $value
     * @psalm-param OrderSearchFilterExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchFilterExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchFilterExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchFilterExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchFilterExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchFilterExpression $data */
                $data = OrderSearchFilterExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
