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
 * @extends MapperSequence<StagedOrderRemoveCustomLineItemAction>
 *
 * @method StagedOrderRemoveCustomLineItemAction current()
 * @method StagedOrderRemoveCustomLineItemAction at($offset)
 */
class StagedOrderRemoveCustomLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderRemoveCustomLineItemAction $value
     * @psalm-param StagedOrderRemoveCustomLineItemAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderRemoveCustomLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemoveCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemoveCustomLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderRemoveCustomLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderRemoveCustomLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
