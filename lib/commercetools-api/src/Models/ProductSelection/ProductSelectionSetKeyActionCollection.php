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
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionSetKeyAction>
 * @method ProductSelectionSetKeyAction current()
 * @method ProductSelectionSetKeyAction end()
 * @method ProductSelectionSetKeyAction at($offset)
 */
class ProductSelectionSetKeyActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionSetKeyAction $value
     * @psalm-param ProductSelectionSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionSetKeyAction $data */
                $data = ProductSelectionSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
