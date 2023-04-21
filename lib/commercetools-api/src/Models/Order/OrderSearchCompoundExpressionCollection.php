<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderSearchQueryCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of OrderSearchCompoundExpression
 * @extends OrderSearchQueryCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method OrderSearchCompoundExpression current()
 * @method OrderSearchCompoundExpression end()
 * @method OrderSearchCompoundExpression at($offset)
 */
class OrderSearchCompoundExpressionCollection extends OrderSearchQueryCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchCompoundExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchCompoundExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchCompoundExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = OrderSearchCompoundExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
