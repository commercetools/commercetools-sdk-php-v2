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
 * @extends MapperSequence<StoreAddSupplyChannelAction>
 * @method StoreAddSupplyChannelAction current()
 * @method StoreAddSupplyChannelAction at($offset)
 */
class StoreAddSupplyChannelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreAddSupplyChannelAction $value
     * @psalm-param StoreAddSupplyChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreAddSupplyChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreAddSupplyChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreAddSupplyChannelAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreAddSupplyChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreAddSupplyChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
