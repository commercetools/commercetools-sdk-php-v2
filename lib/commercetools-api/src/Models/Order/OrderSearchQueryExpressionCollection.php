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
 * @template T of OrderSearchQueryExpression
 * @extends OrderSearchQueryCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method OrderSearchQueryExpression current()
 * @method OrderSearchQueryExpression end()
 * @method OrderSearchQueryExpression at($offset)
 */
class OrderSearchQueryExpressionCollection extends OrderSearchQueryCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchQueryExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchQueryExpression) {
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
        return function (?int $index): ?OrderSearchQueryExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = OrderSearchQueryExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
