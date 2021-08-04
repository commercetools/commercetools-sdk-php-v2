<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Product\ProductUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductUpdateActionCollection<ProductRevertStagedVariantChangesAction>
 * @method ProductRevertStagedVariantChangesAction current()
 * @method ProductRevertStagedVariantChangesAction end()
 * @method ProductRevertStagedVariantChangesAction at($offset)
 */
class ProductRevertStagedVariantChangesActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductRevertStagedVariantChangesAction $value
     * @psalm-param ProductRevertStagedVariantChangesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRevertStagedVariantChangesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRevertStagedVariantChangesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRevertStagedVariantChangesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductRevertStagedVariantChangesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRevertStagedVariantChangesAction $data */
                $data = ProductRevertStagedVariantChangesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
