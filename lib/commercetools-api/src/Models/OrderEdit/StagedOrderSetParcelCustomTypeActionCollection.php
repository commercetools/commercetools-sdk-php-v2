<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetParcelCustomTypeAction>
 * @method StagedOrderSetParcelCustomTypeAction current()
 * @method StagedOrderSetParcelCustomTypeAction end()
 * @method StagedOrderSetParcelCustomTypeAction at($offset)
 */
class StagedOrderSetParcelCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetParcelCustomTypeAction $value
     * @psalm-param StagedOrderSetParcelCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetParcelCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetParcelCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetParcelCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetParcelCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetParcelCustomTypeAction $data */
                $data = StagedOrderSetParcelCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
