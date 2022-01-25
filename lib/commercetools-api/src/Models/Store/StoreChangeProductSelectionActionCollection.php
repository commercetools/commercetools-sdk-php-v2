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
 * @extends StoreUpdateActionCollection<StoreChangeProductSelectionAction>
 * @method StoreChangeProductSelectionAction current()
 * @method StoreChangeProductSelectionAction end()
 * @method StoreChangeProductSelectionAction at($offset)
 */
class StoreChangeProductSelectionActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreChangeProductSelectionAction $value
     * @psalm-param StoreChangeProductSelectionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreChangeProductSelectionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreChangeProductSelectionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreChangeProductSelectionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreChangeProductSelectionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreChangeProductSelectionAction $data */
                $data = StoreChangeProductSelectionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
