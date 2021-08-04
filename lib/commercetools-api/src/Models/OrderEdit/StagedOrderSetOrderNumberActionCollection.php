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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetOrderNumberAction>
 * @method StagedOrderSetOrderNumberAction current()
 * @method StagedOrderSetOrderNumberAction at($offset)
 */
class StagedOrderSetOrderNumberActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetOrderNumberAction $value
     * @psalm-param StagedOrderSetOrderNumberAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetOrderNumberActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetOrderNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetOrderNumberAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetOrderNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetOrderNumberAction $data */
                $data = StagedOrderSetOrderNumberActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
