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
 * @extends StoreUpdateActionCollection<StoreAddProductSelectionAction>
 * @method StoreAddProductSelectionAction current()
 * @method StoreAddProductSelectionAction end()
 * @method StoreAddProductSelectionAction at($offset)
 */
class StoreAddProductSelectionActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreAddProductSelectionAction $value
     * @psalm-param StoreAddProductSelectionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreAddProductSelectionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreAddProductSelectionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreAddProductSelectionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreAddProductSelectionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreAddProductSelectionAction $data */
                $data = StoreAddProductSelectionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
