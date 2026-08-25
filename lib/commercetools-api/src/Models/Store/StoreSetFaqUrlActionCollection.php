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
 * @extends StoreUpdateActionCollection<StoreSetFaqUrlAction>
 * @method StoreSetFaqUrlAction current()
 * @method StoreSetFaqUrlAction end()
 * @method StoreSetFaqUrlAction at($offset)
 */
class StoreSetFaqUrlActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetFaqUrlAction $value
     * @psalm-param StoreSetFaqUrlAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetFaqUrlActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetFaqUrlAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetFaqUrlAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetFaqUrlAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetFaqUrlAction $data */
                $data = StoreSetFaqUrlActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
