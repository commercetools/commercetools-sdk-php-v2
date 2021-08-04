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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetCustomFieldAction>
 * @method StagedOrderSetCustomFieldAction current()
 * @method StagedOrderSetCustomFieldAction end()
 * @method StagedOrderSetCustomFieldAction at($offset)
 */
class StagedOrderSetCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetCustomFieldAction $value
     * @psalm-param StagedOrderSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetCustomFieldAction $data */
                $data = StagedOrderSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
