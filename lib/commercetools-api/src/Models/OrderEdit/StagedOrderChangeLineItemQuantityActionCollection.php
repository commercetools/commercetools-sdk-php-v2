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
 * @extends StagedOrderUpdateActionCollection<StagedOrderChangeLineItemQuantityAction>
 * @method StagedOrderChangeLineItemQuantityAction current()
 * @method StagedOrderChangeLineItemQuantityAction end()
 * @method StagedOrderChangeLineItemQuantityAction at($offset)
 */
class StagedOrderChangeLineItemQuantityActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderChangeLineItemQuantityAction $value
     * @psalm-param StagedOrderChangeLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangeLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderChangeLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderChangeLineItemQuantityAction $data */
                $data = StagedOrderChangeLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
