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
 * @extends MapperSequence<StagedOrderChangeTaxRoundingModeAction>
 *
 * @method StagedOrderChangeTaxRoundingModeAction current()
 * @method StagedOrderChangeTaxRoundingModeAction at($offset)
 */
class StagedOrderChangeTaxRoundingModeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderChangeTaxRoundingModeAction $value
     * @psalm-param StagedOrderChangeTaxRoundingModeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangeTaxRoundingModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeTaxRoundingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeTaxRoundingModeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderChangeTaxRoundingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderChangeTaxRoundingModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
