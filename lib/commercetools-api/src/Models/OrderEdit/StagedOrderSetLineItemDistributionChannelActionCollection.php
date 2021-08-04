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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetLineItemDistributionChannelAction>
 * @method StagedOrderSetLineItemDistributionChannelAction current()
 * @method StagedOrderSetLineItemDistributionChannelAction end()
 * @method StagedOrderSetLineItemDistributionChannelAction at($offset)
 */
class StagedOrderSetLineItemDistributionChannelActionCollection extends StagedOrderUpdateActionCollection
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
        return function (?int $index): ?StagedOrderSetLineItemDistributionChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetLineItemDistributionChannelAction $data */
                $data = StagedOrderSetLineItemDistributionChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
