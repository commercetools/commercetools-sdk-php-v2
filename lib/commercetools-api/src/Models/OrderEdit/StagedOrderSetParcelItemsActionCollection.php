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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetParcelItemsAction>
 * @method StagedOrderSetParcelItemsAction current()
 * @method StagedOrderSetParcelItemsAction at($offset)
 */
class StagedOrderSetParcelItemsActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetParcelItemsAction $value
     * @psalm-param StagedOrderSetParcelItemsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetParcelItemsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetParcelItemsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetParcelItemsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetParcelItemsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetParcelItemsAction $data */
                $data = StagedOrderSetParcelItemsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
