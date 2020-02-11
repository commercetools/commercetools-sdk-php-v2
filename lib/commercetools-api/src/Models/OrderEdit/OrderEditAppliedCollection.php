<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditApplied>
 * @method OrderEditApplied current()
 * @method OrderEditApplied at($offset)
 */
class OrderEditAppliedCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditApplied $value
     * @psalm-param OrderEditApplied|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditAppliedCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditApplied) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditApplied
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditApplied {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditAppliedModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
