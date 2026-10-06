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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeSavedToLineItemAction>
 * @method ProductTypeChangeSavedToLineItemAction current()
 * @method ProductTypeChangeSavedToLineItemAction end()
 * @method ProductTypeChangeSavedToLineItemAction at($offset)
 */
class ProductTypeChangeSavedToLineItemActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeSavedToLineItemAction $value
     * @psalm-param ProductTypeChangeSavedToLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeSavedToLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeSavedToLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeSavedToLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeChangeSavedToLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeSavedToLineItemAction $data */
                $data = ProductTypeChangeSavedToLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
