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
 * @extends MapperSequence<StoresRemoveDistributionChannelsAction>
 * @method StoresRemoveDistributionChannelsAction current()
 * @method StoresRemoveDistributionChannelsAction at($offset)
 */
class StoresRemoveDistributionChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoresRemoveDistributionChannelsAction $value
     * @psalm-param StoresRemoveDistributionChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoresRemoveDistributionChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoresRemoveDistributionChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoresRemoveDistributionChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoresRemoveDistributionChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoresRemoveDistributionChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
