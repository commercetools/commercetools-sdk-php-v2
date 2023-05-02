<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderSearchQueryExpressionValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderSearchQueryExpressionValueCollection<OrderSearchAnyValue>
 * @method OrderSearchAnyValue current()
 * @method OrderSearchAnyValue end()
 * @method OrderSearchAnyValue at($offset)
 */
class OrderSearchAnyValueCollection extends OrderSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert OrderSearchAnyValue $value
     * @psalm-param OrderSearchAnyValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchAnyValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchAnyValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchAnyValue
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchAnyValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchAnyValue $data */
                $data = OrderSearchAnyValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
