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
 * @extends StagedOrderUpdateActionCollection<StagedOrderChangeCustomLineItemQuantityAction>
 * @method StagedOrderChangeCustomLineItemQuantityAction current()
 * @method StagedOrderChangeCustomLineItemQuantityAction at($offset)
 */
class StagedOrderChangeCustomLineItemQuantityActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderChangeCustomLineItemQuantityAction $value
     * @psalm-param StagedOrderChangeCustomLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangeCustomLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeCustomLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeCustomLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderChangeCustomLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderChangeCustomLineItemQuantityAction $data */
                $data = StagedOrderChangeCustomLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
