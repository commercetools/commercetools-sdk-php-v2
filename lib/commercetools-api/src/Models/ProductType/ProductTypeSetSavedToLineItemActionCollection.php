<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\ProductType\ProductTypeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTypeUpdateActionCollection<ProductTypeSetSavedToLineItemAction>
 * @method ProductTypeSetSavedToLineItemAction current()
 * @method ProductTypeSetSavedToLineItemAction end()
 * @method ProductTypeSetSavedToLineItemAction at($offset)
 */
class ProductTypeSetSavedToLineItemActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeSetSavedToLineItemAction $value
     * @psalm-param ProductTypeSetSavedToLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeSetSavedToLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeSetSavedToLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeSetSavedToLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeSetSavedToLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeSetSavedToLineItemAction $data */
                $data = ProductTypeSetSavedToLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
