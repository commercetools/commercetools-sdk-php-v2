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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetCustomTypeAction>
 * @method StagedOrderSetCustomTypeAction current()
 * @method StagedOrderSetCustomTypeAction end()
 * @method StagedOrderSetCustomTypeAction at($offset)
 */
class StagedOrderSetCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetCustomTypeAction $value
     * @psalm-param StagedOrderSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetCustomTypeAction $data */
                $data = StagedOrderSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
