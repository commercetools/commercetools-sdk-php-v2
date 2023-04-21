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
 * @extends OrderSearchQueryExpressionValueCollection<OrderSearchStringValue>
 * @method OrderSearchStringValue current()
 * @method OrderSearchStringValue end()
 * @method OrderSearchStringValue at($offset)
 */
class OrderSearchStringValueCollection extends OrderSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert OrderSearchStringValue $value
     * @psalm-param OrderSearchStringValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchStringValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchStringValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchStringValue
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchStringValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchStringValue $data */
                $data = OrderSearchStringValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
