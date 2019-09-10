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
 * @extends MapperSequence<StagedOrderSetParcelTrackingDataAction>
 *
 * @method StagedOrderSetParcelTrackingDataAction current()
 * @method StagedOrderSetParcelTrackingDataAction at($offset)
 */
class StagedOrderSetParcelTrackingDataActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetParcelTrackingDataAction $value
     * @psalm-param StagedOrderSetParcelTrackingDataAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?StagedOrderSetParcelTrackingDataAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetParcelTrackingDataActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
