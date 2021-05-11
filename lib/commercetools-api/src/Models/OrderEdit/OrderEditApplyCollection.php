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
 * @extends MapperSequence<OrderEditApply>
 * @method OrderEditApply current()
 * @method OrderEditApply at($offset)
 */
class OrderEditApplyCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditApply $value
     * @psalm-param OrderEditApply|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditApplyCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditApply) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditApply
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditApply {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditApply $data */
                $data = OrderEditApplyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
