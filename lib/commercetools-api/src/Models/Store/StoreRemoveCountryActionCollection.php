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
 * @extends StoreUpdateActionCollection<StoreRemoveCountryAction>
 * @method StoreRemoveCountryAction current()
 * @method StoreRemoveCountryAction end()
 * @method StoreRemoveCountryAction at($offset)
 */
class StoreRemoveCountryActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreRemoveCountryAction $value
     * @psalm-param StoreRemoveCountryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreRemoveCountryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreRemoveCountryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreRemoveCountryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreRemoveCountryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreRemoveCountryAction $data */
                $data = StoreRemoveCountryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
