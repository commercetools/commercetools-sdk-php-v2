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
 * @extends StoreUpdateActionCollection<StoreSetImprintUrlAction>
 * @method StoreSetImprintUrlAction current()
 * @method StoreSetImprintUrlAction end()
 * @method StoreSetImprintUrlAction at($offset)
 */
class StoreSetImprintUrlActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetImprintUrlAction $value
     * @psalm-param StoreSetImprintUrlAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetImprintUrlActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetImprintUrlAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetImprintUrlAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetImprintUrlAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetImprintUrlAction $data */
                $data = StoreSetImprintUrlActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
