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
 * @extends OrderSearchQueryExpressionCollection<OrderSearchFullTextExpression>
 * @method OrderSearchFullTextExpression current()
 * @method OrderSearchFullTextExpression end()
 * @method OrderSearchFullTextExpression at($offset)
 */
class OrderSearchFullTextExpressionCollection extends OrderSearchQueryExpressionCollection
{
    /**
     * @psalm-assert OrderSearchFullTextExpression $value
     * @psalm-param OrderSearchFullTextExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchFullTextExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchFullTextExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchFullTextExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchFullTextExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchFullTextExpression $data */
                $data = OrderSearchFullTextExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
