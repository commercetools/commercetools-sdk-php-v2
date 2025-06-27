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
 * @extends StagedOrderUpdateActionCollection<StagedOrderChangePriceRoundingModeAction>
 * @method StagedOrderChangePriceRoundingModeAction current()
 * @method StagedOrderChangePriceRoundingModeAction end()
 * @method StagedOrderChangePriceRoundingModeAction at($offset)
 */
class StagedOrderChangePriceRoundingModeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderChangePriceRoundingModeAction $value
     * @psalm-param StagedOrderChangePriceRoundingModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangePriceRoundingModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangePriceRoundingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangePriceRoundingModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderChangePriceRoundingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderChangePriceRoundingModeAction $data */
                $data = StagedOrderChangePriceRoundingModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
