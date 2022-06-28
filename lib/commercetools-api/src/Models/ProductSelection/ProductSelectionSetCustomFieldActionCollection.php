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
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionSetCustomFieldAction>
 * @method ProductSelectionSetCustomFieldAction current()
 * @method ProductSelectionSetCustomFieldAction end()
 * @method ProductSelectionSetCustomFieldAction at($offset)
 */
class ProductSelectionSetCustomFieldActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionSetCustomFieldAction $value
     * @psalm-param ProductSelectionSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionSetCustomFieldAction $data */
                $data = ProductSelectionSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
