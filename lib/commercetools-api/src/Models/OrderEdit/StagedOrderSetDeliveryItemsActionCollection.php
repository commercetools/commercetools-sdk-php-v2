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
 * @extends MapperSequence<StagedOrderSetDeliveryItemsAction>
 *
 * @method StagedOrderSetDeliveryItemsAction current()
 * @method StagedOrderSetDeliveryItemsAction at($offset)
 */
class StagedOrderSetDeliveryItemsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetDeliveryItemsAction $value
     * @psalm-param StagedOrderSetDeliveryItemsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDeliveryItemsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDeliveryItemsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDeliveryItemsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetDeliveryItemsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetDeliveryItemsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
