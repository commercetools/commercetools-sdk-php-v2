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
 * @extends OrderSearchQueryExpressionCollection<OrderSearchWildCardExpression>
 * @method OrderSearchWildCardExpression current()
 * @method OrderSearchWildCardExpression end()
 * @method OrderSearchWildCardExpression at($offset)
 */
class OrderSearchWildCardExpressionCollection extends OrderSearchQueryExpressionCollection
{
    /**
     * @psalm-assert OrderSearchWildCardExpression $value
     * @psalm-param OrderSearchWildCardExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchWildCardExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchWildCardExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchWildCardExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchWildCardExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchWildCardExpression $data */
                $data = OrderSearchWildCardExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
