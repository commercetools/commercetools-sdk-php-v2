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
 * @extends OrderSearchQueryExpressionValueCollection<OrderSearchFullTextValue>
 * @method OrderSearchFullTextValue current()
 * @method OrderSearchFullTextValue end()
 * @method OrderSearchFullTextValue at($offset)
 */
class OrderSearchFullTextValueCollection extends OrderSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert OrderSearchFullTextValue $value
     * @psalm-param OrderSearchFullTextValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchFullTextValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchFullTextValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchFullTextValue
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchFullTextValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchFullTextValue $data */
                $data = OrderSearchFullTextValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
