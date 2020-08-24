<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ItemShippingTarget>
 * @method ItemShippingTarget current()
 * @method ItemShippingTarget at($offset)
 */
class ItemShippingTargetCollection extends MapperSequence
{
    /**
     * @psalm-assert ItemShippingTarget $value
     * @psalm-param ItemShippingTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ItemShippingTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof ItemShippingTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ItemShippingTarget
     */
    protected function mapper()
    {
        return function (int $index): ?ItemShippingTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ItemShippingTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
