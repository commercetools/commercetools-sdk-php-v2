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
 * @extends StoreUpdateActionCollection<StoreSetProductSelectionsAction>
 * @method StoreSetProductSelectionsAction current()
 * @method StoreSetProductSelectionsAction end()
 * @method StoreSetProductSelectionsAction at($offset)
 */
class StoreSetProductSelectionsActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetProductSelectionsAction $value
     * @psalm-param StoreSetProductSelectionsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetProductSelectionsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetProductSelectionsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetProductSelectionsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetProductSelectionsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetProductSelectionsAction $data */
                $data = StoreSetProductSelectionsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
