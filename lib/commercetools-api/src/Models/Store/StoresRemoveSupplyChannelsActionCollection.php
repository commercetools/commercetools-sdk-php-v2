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
 * @extends MapperSequence<StoresRemoveSupplyChannelsAction>
 * @method StoresRemoveSupplyChannelsAction current()
 * @method StoresRemoveSupplyChannelsAction at($offset)
 */
class StoresRemoveSupplyChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoresRemoveSupplyChannelsAction $value
     * @psalm-param StoresRemoveSupplyChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoresRemoveSupplyChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoresRemoveSupplyChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoresRemoveSupplyChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoresRemoveSupplyChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoresRemoveSupplyChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
