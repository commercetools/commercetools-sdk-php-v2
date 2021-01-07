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
 * @extends MapperSequence<StoreSetSupplyChannelsAction>
 * @method StoreSetSupplyChannelsAction current()
 * @method StoreSetSupplyChannelsAction at($offset)
 */
class StoreSetSupplyChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreSetSupplyChannelsAction $value
     * @psalm-param StoreSetSupplyChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetSupplyChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetSupplyChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetSupplyChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreSetSupplyChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreSetSupplyChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
