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
 * @extends MapperSequence<StoreSetDistributionChannelsAction>
 * @method StoreSetDistributionChannelsAction current()
 * @method StoreSetDistributionChannelsAction at($offset)
 */
class StoreSetDistributionChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreSetDistributionChannelsAction $value
     * @psalm-param StoreSetDistributionChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetDistributionChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetDistributionChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetDistributionChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreSetDistributionChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreSetDistributionChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
