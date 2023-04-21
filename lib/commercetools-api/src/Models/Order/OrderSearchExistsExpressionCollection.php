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
 * @extends OrderSearchQueryExpressionCollection<OrderSearchExistsExpression>
 * @method OrderSearchExistsExpression current()
 * @method OrderSearchExistsExpression end()
 * @method OrderSearchExistsExpression at($offset)
 */
class OrderSearchExistsExpressionCollection extends OrderSearchQueryExpressionCollection
{
    /**
     * @psalm-assert OrderSearchExistsExpression $value
     * @psalm-param OrderSearchExistsExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchExistsExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchExistsExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchExistsExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchExistsExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchExistsExpression $data */
                $data = OrderSearchExistsExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
