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
 * @extends OrderSearchCompoundExpressionCollection<OrderSearchNotExpression>
 * @method OrderSearchNotExpression current()
 * @method OrderSearchNotExpression end()
 * @method OrderSearchNotExpression at($offset)
 */
class OrderSearchNotExpressionCollection extends OrderSearchCompoundExpressionCollection
{
    /**
     * @psalm-assert OrderSearchNotExpression $value
     * @psalm-param OrderSearchNotExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchNotExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchNotExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchNotExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchNotExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchNotExpression $data */
                $data = OrderSearchNotExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
