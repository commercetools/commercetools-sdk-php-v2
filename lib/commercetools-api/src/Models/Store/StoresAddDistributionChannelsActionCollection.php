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
 * @extends MapperSequence<StoresAddDistributionChannelsAction>
 * @method StoresAddDistributionChannelsAction current()
 * @method StoresAddDistributionChannelsAction at($offset)
 */
class StoresAddDistributionChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoresAddDistributionChannelsAction $value
     * @psalm-param StoresAddDistributionChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoresAddDistributionChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoresAddDistributionChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoresAddDistributionChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoresAddDistributionChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoresAddDistributionChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
