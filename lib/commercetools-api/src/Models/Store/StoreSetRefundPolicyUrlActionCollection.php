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
 * @extends StoreUpdateActionCollection<StoreSetRefundPolicyUrlAction>
 * @method StoreSetRefundPolicyUrlAction current()
 * @method StoreSetRefundPolicyUrlAction end()
 * @method StoreSetRefundPolicyUrlAction at($offset)
 */
class StoreSetRefundPolicyUrlActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetRefundPolicyUrlAction $value
     * @psalm-param StoreSetRefundPolicyUrlAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetRefundPolicyUrlActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetRefundPolicyUrlAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetRefundPolicyUrlAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetRefundPolicyUrlAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetRefundPolicyUrlAction $data */
                $data = StoreSetRefundPolicyUrlActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
