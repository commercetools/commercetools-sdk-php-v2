<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of Allocation
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method Allocation current()
 * @method Allocation end()
 * @method Allocation at($offset)
 */
class AllocationCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AllocationCollection
     */
    public function add($value)
    {
        if (!$value instanceof Allocation) {
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
        return function (?int $index): ?Allocation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = AllocationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
