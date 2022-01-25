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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetParcelCustomFieldAction>
 * @method StagedOrderSetParcelCustomFieldAction current()
 * @method StagedOrderSetParcelCustomFieldAction end()
 * @method StagedOrderSetParcelCustomFieldAction at($offset)
 */
class StagedOrderSetParcelCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetParcelCustomFieldAction $value
     * @psalm-param StagedOrderSetParcelCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetParcelCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetParcelCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetParcelCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetParcelCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetParcelCustomFieldAction $data */
                $data = StagedOrderSetParcelCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
