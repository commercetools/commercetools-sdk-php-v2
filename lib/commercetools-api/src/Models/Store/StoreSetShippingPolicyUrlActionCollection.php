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
 * @extends StoreUpdateActionCollection<StoreSetShippingPolicyUrlAction>
 * @method StoreSetShippingPolicyUrlAction current()
 * @method StoreSetShippingPolicyUrlAction end()
 * @method StoreSetShippingPolicyUrlAction at($offset)
 */
class StoreSetShippingPolicyUrlActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetShippingPolicyUrlAction $value
     * @psalm-param StoreSetShippingPolicyUrlAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetShippingPolicyUrlActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetShippingPolicyUrlAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetShippingPolicyUrlAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetShippingPolicyUrlAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetShippingPolicyUrlAction $data */
                $data = StoreSetShippingPolicyUrlActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
