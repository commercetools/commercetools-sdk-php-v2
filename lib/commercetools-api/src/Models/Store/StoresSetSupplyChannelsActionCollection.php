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
 * @extends MapperSequence<StoresSetSupplyChannelsAction>
 * @method StoresSetSupplyChannelsAction current()
 * @method StoresSetSupplyChannelsAction at($offset)
 */
class StoresSetSupplyChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoresSetSupplyChannelsAction $value
     * @psalm-param StoresSetSupplyChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoresSetSupplyChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoresSetSupplyChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoresSetSupplyChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoresSetSupplyChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoresSetSupplyChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
