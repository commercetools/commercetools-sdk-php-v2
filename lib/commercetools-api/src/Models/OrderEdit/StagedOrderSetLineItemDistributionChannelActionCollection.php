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
 * @extends MapperSequence<StagedOrderSetLineItemDistributionChannelAction>
 * @method StagedOrderSetLineItemDistributionChannelAction current()
 * @method StagedOrderSetLineItemDistributionChannelAction at($offset)
 */
class StagedOrderSetLineItemDistributionChannelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetLineItemDistributionChannelAction $value
     * @psalm-param StagedOrderSetLineItemDistributionChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLineItemDistributionChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemDistributionChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemDistributionChannelAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetLineItemDistributionChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetLineItemDistributionChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
