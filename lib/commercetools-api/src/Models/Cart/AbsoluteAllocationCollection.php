<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\AllocationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AllocationCollection<AbsoluteAllocation>
 * @method AbsoluteAllocation current()
 * @method AbsoluteAllocation end()
 * @method AbsoluteAllocation at($offset)
 */
class AbsoluteAllocationCollection extends AllocationCollection
{
    /**
     * @psalm-assert AbsoluteAllocation $value
     * @psalm-param AbsoluteAllocation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AbsoluteAllocationCollection
     */
    public function add($value)
    {
        if (!$value instanceof AbsoluteAllocation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AbsoluteAllocation
     */
    protected function mapper()
    {
        return function (?int $index): ?AbsoluteAllocation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AbsoluteAllocation $data */
                $data = AbsoluteAllocationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
