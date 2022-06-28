<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\ProductSelection\ProductSelectionUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionChangeNameAction>
 * @method ProductSelectionChangeNameAction current()
 * @method ProductSelectionChangeNameAction end()
 * @method ProductSelectionChangeNameAction at($offset)
 */
class ProductSelectionChangeNameActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionChangeNameAction $value
     * @psalm-param ProductSelectionChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionChangeNameAction $data */
                $data = ProductSelectionChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
