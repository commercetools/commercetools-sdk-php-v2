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
 * @extends MapperSequence<StoresAddSupplyChannelsAction>
 * @method StoresAddSupplyChannelsAction current()
 * @method StoresAddSupplyChannelsAction at($offset)
 */
class StoresAddSupplyChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoresAddSupplyChannelsAction $value
     * @psalm-param StoresAddSupplyChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoresAddSupplyChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoresAddSupplyChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoresAddSupplyChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoresAddSupplyChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoresAddSupplyChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
