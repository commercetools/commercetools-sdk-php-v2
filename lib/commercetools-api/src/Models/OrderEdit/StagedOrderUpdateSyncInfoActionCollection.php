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
 * @extends StagedOrderUpdateActionCollection<StagedOrderUpdateSyncInfoAction>
 * @method StagedOrderUpdateSyncInfoAction current()
 * @method StagedOrderUpdateSyncInfoAction at($offset)
 */
class StagedOrderUpdateSyncInfoActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderUpdateSyncInfoAction $value
     * @psalm-param StagedOrderUpdateSyncInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderUpdateSyncInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderUpdateSyncInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderUpdateSyncInfoAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderUpdateSyncInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderUpdateSyncInfoAction $data */
                $data = StagedOrderUpdateSyncInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
