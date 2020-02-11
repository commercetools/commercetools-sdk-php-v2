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
 * @extends MapperSequence<StagedOrderUpdateAction>
 * @method StagedOrderUpdateAction current()
 * @method StagedOrderUpdateAction at($offset)
 */
class StagedOrderUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderUpdateAction $value
     * @psalm-param StagedOrderUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
