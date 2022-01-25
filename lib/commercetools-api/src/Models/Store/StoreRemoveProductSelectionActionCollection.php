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
 * @extends StoreUpdateActionCollection<StoreRemoveProductSelectionAction>
 * @method StoreRemoveProductSelectionAction current()
 * @method StoreRemoveProductSelectionAction end()
 * @method StoreRemoveProductSelectionAction at($offset)
 */
class StoreRemoveProductSelectionActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreRemoveProductSelectionAction $value
     * @psalm-param StoreRemoveProductSelectionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreRemoveProductSelectionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreRemoveProductSelectionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreRemoveProductSelectionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreRemoveProductSelectionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreRemoveProductSelectionAction $data */
                $data = StoreRemoveProductSelectionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
