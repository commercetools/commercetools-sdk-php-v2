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
 * @extends MapperSequence<OrderSearchSorting>
 * @method OrderSearchSorting current()
 * @method OrderSearchSorting end()
 * @method OrderSearchSorting at($offset)
 */
class OrderSearchSortingCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSearchSorting $value
     * @psalm-param OrderSearchSorting|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchSortingCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchSorting) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchSorting
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchSorting {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchSorting $data */
                $data = OrderSearchSortingModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
