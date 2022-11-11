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
 * @extends StoreUpdateActionCollection<StoreSetCountriesAction>
 * @method StoreSetCountriesAction current()
 * @method StoreSetCountriesAction end()
 * @method StoreSetCountriesAction at($offset)
 */
class StoreSetCountriesActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetCountriesAction $value
     * @psalm-param StoreSetCountriesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetCountriesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetCountriesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetCountriesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetCountriesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetCountriesAction $data */
                $data = StoreSetCountriesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
