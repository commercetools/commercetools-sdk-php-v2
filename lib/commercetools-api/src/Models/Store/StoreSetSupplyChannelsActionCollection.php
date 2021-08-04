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
 * @extends StoreUpdateActionCollection<StoreSetSupplyChannelsAction>
 * @method StoreSetSupplyChannelsAction current()
 * @method StoreSetSupplyChannelsAction at($offset)
 */
class StoreSetSupplyChannelsActionCollection extends StoreUpdateActionCollection
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
        return function (?int $index): ?StoreSetSupplyChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetSupplyChannelsAction $data */
                $data = StoreSetSupplyChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
