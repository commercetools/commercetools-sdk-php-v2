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
 * @extends OrderSearchCompoundExpressionCollection<OrderSearchAndExpression>
 * @method OrderSearchAndExpression current()
 * @method OrderSearchAndExpression end()
 * @method OrderSearchAndExpression at($offset)
 */
class OrderSearchAndExpressionCollection extends OrderSearchCompoundExpressionCollection
{
    /**
     * @psalm-assert OrderSearchAndExpression $value
     * @psalm-param OrderSearchAndExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchAndExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchAndExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchAndExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchAndExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchAndExpression $data */
                $data = OrderSearchAndExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
