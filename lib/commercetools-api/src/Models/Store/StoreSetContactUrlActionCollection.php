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
 * @extends StoreUpdateActionCollection<StoreSetContactUrlAction>
 * @method StoreSetContactUrlAction current()
 * @method StoreSetContactUrlAction end()
 * @method StoreSetContactUrlAction at($offset)
 */
class StoreSetContactUrlActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetContactUrlAction $value
     * @psalm-param StoreSetContactUrlAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetContactUrlActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetContactUrlAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetContactUrlAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetContactUrlAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetContactUrlAction $data */
                $data = StoreSetContactUrlActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
