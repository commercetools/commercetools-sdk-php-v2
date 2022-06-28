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
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionRemoveProductAction>
 * @method ProductSelectionRemoveProductAction current()
 * @method ProductSelectionRemoveProductAction end()
 * @method ProductSelectionRemoveProductAction at($offset)
 */
class ProductSelectionRemoveProductActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionRemoveProductAction $value
     * @psalm-param ProductSelectionRemoveProductAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionRemoveProductActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionRemoveProductAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionRemoveProductAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionRemoveProductAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionRemoveProductAction $data */
                $data = ProductSelectionRemoveProductActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
