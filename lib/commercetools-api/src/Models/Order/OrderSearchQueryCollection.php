<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderSearchQuery>
 * @method OrderSearchQuery current()
 * @method OrderSearchQuery end()
 * @method OrderSearchQuery at($offset)
 */
class OrderSearchQueryCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSearchQuery $value
     * @psalm-param OrderSearchQuery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchQueryCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchQuery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchQuery
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchQuery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchQuery $data */
                $data = OrderSearchQueryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
