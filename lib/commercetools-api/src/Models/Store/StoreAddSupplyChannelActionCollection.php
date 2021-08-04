<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Store\StoreUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StoreUpdateActionCollection<StoreAddSupplyChannelAction>
 * @method StoreAddSupplyChannelAction current()
 * @method StoreAddSupplyChannelAction end()
 * @method StoreAddSupplyChannelAction at($offset)
 */
class StoreAddSupplyChannelActionCollection extends StoreUpdateActionCollection
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
        return function (?int $index): ?StoreAddSupplyChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreAddSupplyChannelAction $data */
                $data = StoreAddSupplyChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
