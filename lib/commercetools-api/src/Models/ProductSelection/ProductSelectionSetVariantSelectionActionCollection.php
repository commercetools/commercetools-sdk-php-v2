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
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionSetVariantSelectionAction>
 * @method ProductSelectionSetVariantSelectionAction current()
 * @method ProductSelectionSetVariantSelectionAction end()
 * @method ProductSelectionSetVariantSelectionAction at($offset)
 */
class ProductSelectionSetVariantSelectionActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionSetVariantSelectionAction $value
     * @psalm-param ProductSelectionSetVariantSelectionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionSetVariantSelectionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionSetVariantSelectionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionSetVariantSelectionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionSetVariantSelectionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionSetVariantSelectionAction $data */
                $data = ProductSelectionSetVariantSelectionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
