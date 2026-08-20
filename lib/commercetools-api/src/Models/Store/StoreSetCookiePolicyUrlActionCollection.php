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
 * @extends StoreUpdateActionCollection<StoreSetCookiePolicyUrlAction>
 * @method StoreSetCookiePolicyUrlAction current()
 * @method StoreSetCookiePolicyUrlAction end()
 * @method StoreSetCookiePolicyUrlAction at($offset)
 */
class StoreSetCookiePolicyUrlActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetCookiePolicyUrlAction $value
     * @psalm-param StoreSetCookiePolicyUrlAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetCookiePolicyUrlActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetCookiePolicyUrlAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetCookiePolicyUrlAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetCookiePolicyUrlAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetCookiePolicyUrlAction $data */
                $data = StoreSetCookiePolicyUrlActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
