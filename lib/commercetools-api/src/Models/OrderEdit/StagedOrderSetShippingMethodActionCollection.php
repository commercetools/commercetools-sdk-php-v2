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
 * @extends MapperSequence<StagedOrderSetShippingMethodAction>
 *
 * @method StagedOrderSetShippingMethodAction current()
 * @method StagedOrderSetShippingMethodAction at($offset)
 */
class StagedOrderSetShippingMethodActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetShippingMethodAction $value
     * @psalm-param StagedOrderSetShippingMethodAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
