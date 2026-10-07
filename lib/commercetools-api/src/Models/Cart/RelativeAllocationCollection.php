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
 * @extends AllocationCollection<RelativeAllocation>
 * @method RelativeAllocation current()
 * @method RelativeAllocation end()
 * @method RelativeAllocation at($offset)
 */
class RelativeAllocationCollection extends AllocationCollection
{
    /**
     * @psalm-assert RelativeAllocation $value
     * @psalm-param RelativeAllocation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RelativeAllocationCollection
     */
    public function add($value)
    {
        if (!$value instanceof RelativeAllocation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RelativeAllocation
     */
    protected function mapper()
    {
        return function (?int $index): ?RelativeAllocation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RelativeAllocation $data */
                $data = RelativeAllocationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
