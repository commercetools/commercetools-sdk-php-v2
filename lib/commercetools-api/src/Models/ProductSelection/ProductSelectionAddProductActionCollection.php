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
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionAddProductAction>
 * @method ProductSelectionAddProductAction current()
 * @method ProductSelectionAddProductAction end()
 * @method ProductSelectionAddProductAction at($offset)
 */
class ProductSelectionAddProductActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionAddProductAction $value
     * @psalm-param ProductSelectionAddProductAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionAddProductActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionAddProductAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionAddProductAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionAddProductAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionAddProductAction $data */
                $data = ProductSelectionAddProductActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
