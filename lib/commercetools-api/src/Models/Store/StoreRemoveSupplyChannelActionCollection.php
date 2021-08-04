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
 * @extends StoreUpdateActionCollection<StoreRemoveSupplyChannelAction>
 * @method StoreRemoveSupplyChannelAction current()
 * @method StoreRemoveSupplyChannelAction at($offset)
 */
class StoreRemoveSupplyChannelActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreRemoveSupplyChannelAction $value
     * @psalm-param StoreRemoveSupplyChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreRemoveSupplyChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreRemoveSupplyChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreRemoveSupplyChannelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreRemoveSupplyChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreRemoveSupplyChannelAction $data */
                $data = StoreRemoveSupplyChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
