<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\OrderEdit\OrderEditResultCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderEditResultCollection<OrderEditApplied>
 * @method OrderEditApplied current()
 * @method OrderEditApplied end()
 * @method OrderEditApplied at($offset)
 */
class OrderEditAppliedCollection extends OrderEditResultCollection
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
        return function (?int $index): ?OrderEditApplied {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditApplied $data */
                $data = OrderEditAppliedModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
