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
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionSetCustomTypeAction>
 * @method ProductSelectionSetCustomTypeAction current()
 * @method ProductSelectionSetCustomTypeAction end()
 * @method ProductSelectionSetCustomTypeAction at($offset)
 */
class ProductSelectionSetCustomTypeActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionSetCustomTypeAction $value
     * @psalm-param ProductSelectionSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionSetCustomTypeAction $data */
                $data = ProductSelectionSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
