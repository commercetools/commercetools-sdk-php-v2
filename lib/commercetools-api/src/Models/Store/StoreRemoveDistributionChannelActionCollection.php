<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StoreRemoveDistributionChannelAction>
 * @method StoreRemoveDistributionChannelAction current()
 * @method StoreRemoveDistributionChannelAction at($offset)
 */
class StoreRemoveDistributionChannelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreRemoveDistributionChannelAction $value
     * @psalm-param StoreRemoveDistributionChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreRemoveDistributionChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreRemoveDistributionChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreRemoveDistributionChannelAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreRemoveDistributionChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreRemoveDistributionChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
