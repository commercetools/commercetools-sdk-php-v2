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
 * @extends StoreUpdateActionCollection<StoreAddDistributionChannelAction>
 * @method StoreAddDistributionChannelAction current()
 * @method StoreAddDistributionChannelAction at($offset)
 */
class StoreAddDistributionChannelActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreAddDistributionChannelAction $value
     * @psalm-param StoreAddDistributionChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreAddDistributionChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreAddDistributionChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreAddDistributionChannelAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreAddDistributionChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreAddDistributionChannelAction $data */
                $data = StoreAddDistributionChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
