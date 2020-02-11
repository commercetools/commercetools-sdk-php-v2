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
 * @extends MapperSequence<StagedOrder>
 * @method StagedOrder current()
 * @method StagedOrder at($offset)
 */
class StagedOrderCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrder $value
     * @psalm-param StagedOrder|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrder) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrder
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrder {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
