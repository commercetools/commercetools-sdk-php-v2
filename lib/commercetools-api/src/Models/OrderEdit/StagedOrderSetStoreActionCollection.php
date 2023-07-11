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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetStoreAction>
 * @method StagedOrderSetStoreAction current()
 * @method StagedOrderSetStoreAction end()
 * @method StagedOrderSetStoreAction at($offset)
 */
class StagedOrderSetStoreActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetStoreAction $value
     * @psalm-param StagedOrderSetStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetStoreAction $data */
                $data = StagedOrderSetStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
