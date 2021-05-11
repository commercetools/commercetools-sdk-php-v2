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
 * @extends StagedOrderUpdateActionCollection<StagedOrderChangeTaxModeAction>
 * @method StagedOrderChangeTaxModeAction current()
 * @method StagedOrderChangeTaxModeAction at($offset)
 */
class StagedOrderChangeTaxModeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderChangeTaxModeAction $value
     * @psalm-param StagedOrderChangeTaxModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangeTaxModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeTaxModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeTaxModeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderChangeTaxModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderChangeTaxModeAction $data */
                $data = StagedOrderChangeTaxModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
