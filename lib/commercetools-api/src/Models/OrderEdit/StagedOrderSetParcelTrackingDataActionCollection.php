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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetParcelTrackingDataAction>
 * @method StagedOrderSetParcelTrackingDataAction current()
 * @method StagedOrderSetParcelTrackingDataAction at($offset)
 */
class StagedOrderSetParcelTrackingDataActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetParcelTrackingDataAction $value
     * @psalm-param StagedOrderSetParcelTrackingDataAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetParcelTrackingDataActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetParcelTrackingDataAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetParcelTrackingDataAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetParcelTrackingDataAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetParcelTrackingDataAction $data */
                $data = StagedOrderSetParcelTrackingDataActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
