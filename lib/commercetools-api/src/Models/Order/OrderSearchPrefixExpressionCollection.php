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
 * @extends OrderSearchQueryExpressionCollection<OrderSearchPrefixExpression>
 * @method OrderSearchPrefixExpression current()
 * @method OrderSearchPrefixExpression end()
 * @method OrderSearchPrefixExpression at($offset)
 */
class OrderSearchPrefixExpressionCollection extends OrderSearchQueryExpressionCollection
{
    /**
     * @psalm-assert OrderSearchPrefixExpression $value
     * @psalm-param OrderSearchPrefixExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchPrefixExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchPrefixExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchPrefixExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchPrefixExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchPrefixExpression $data */
                $data = OrderSearchPrefixExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
