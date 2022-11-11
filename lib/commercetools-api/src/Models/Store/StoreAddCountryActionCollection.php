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
 * @extends StoreUpdateActionCollection<StoreAddCountryAction>
 * @method StoreAddCountryAction current()
 * @method StoreAddCountryAction end()
 * @method StoreAddCountryAction at($offset)
 */
class StoreAddCountryActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreAddCountryAction $value
     * @psalm-param StoreAddCountryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreAddCountryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreAddCountryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreAddCountryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreAddCountryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreAddCountryAction $data */
                $data = StoreAddCountryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
