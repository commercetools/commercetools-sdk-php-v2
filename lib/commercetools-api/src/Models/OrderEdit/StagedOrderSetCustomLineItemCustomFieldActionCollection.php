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
 * @extends MapperSequence<StagedOrderSetCustomLineItemCustomFieldAction>
 * @method StagedOrderSetCustomLineItemCustomFieldAction current()
 * @method StagedOrderSetCustomLineItemCustomFieldAction at($offset)
 */
class StagedOrderSetCustomLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCustomLineItemCustomFieldAction $value
     * @psalm-param StagedOrderSetCustomLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetCustomLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCustomLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
