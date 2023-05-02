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
 * @extends OrderSearchQueryExpressionCollection<OrderSearchExactExpression>
 * @method OrderSearchExactExpression current()
 * @method OrderSearchExactExpression end()
 * @method OrderSearchExactExpression at($offset)
 */
class OrderSearchExactExpressionCollection extends OrderSearchQueryExpressionCollection
{
    /**
     * @psalm-assert OrderSearchExactExpression $value
     * @psalm-param OrderSearchExactExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchExactExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchExactExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchExactExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchExactExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchExactExpression $data */
                $data = OrderSearchExactExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
