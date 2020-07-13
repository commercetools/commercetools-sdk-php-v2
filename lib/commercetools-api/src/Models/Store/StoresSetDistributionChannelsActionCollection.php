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
 * @extends MapperSequence<StoresSetDistributionChannelsAction>
 * @method StoresSetDistributionChannelsAction current()
 * @method StoresSetDistributionChannelsAction at($offset)
 */
class StoresSetDistributionChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoresSetDistributionChannelsAction $value
     * @psalm-param StoresSetDistributionChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoresSetDistributionChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoresSetDistributionChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoresSetDistributionChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoresSetDistributionChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoresSetDistributionChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
