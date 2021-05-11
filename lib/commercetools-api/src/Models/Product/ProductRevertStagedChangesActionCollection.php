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
 * @extends ProductUpdateActionCollection<ProductRevertStagedChangesAction>
 * @method ProductRevertStagedChangesAction current()
 * @method ProductRevertStagedChangesAction at($offset)
 */
class ProductRevertStagedChangesActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductRevertStagedChangesAction $value
     * @psalm-param ProductRevertStagedChangesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRevertStagedChangesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRevertStagedChangesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRevertStagedChangesAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRevertStagedChangesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRevertStagedChangesAction $data */
                $data = ProductRevertStagedChangesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
