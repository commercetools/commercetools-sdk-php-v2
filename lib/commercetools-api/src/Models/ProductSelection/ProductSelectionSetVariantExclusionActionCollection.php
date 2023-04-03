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
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionSetVariantExclusionAction>
 * @method ProductSelectionSetVariantExclusionAction current()
 * @method ProductSelectionSetVariantExclusionAction end()
 * @method ProductSelectionSetVariantExclusionAction at($offset)
 */
class ProductSelectionSetVariantExclusionActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionSetVariantExclusionAction $value
     * @psalm-param ProductSelectionSetVariantExclusionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionSetVariantExclusionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionSetVariantExclusionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionSetVariantExclusionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionSetVariantExclusionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionSetVariantExclusionAction $data */
                $data = ProductSelectionSetVariantExclusionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
