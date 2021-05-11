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
 * @extends ProductUpdateActionCollection<ProductRemoveFromCategoryAction>
 * @method ProductRemoveFromCategoryAction current()
 * @method ProductRemoveFromCategoryAction at($offset)
 */
class ProductRemoveFromCategoryActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductRemoveFromCategoryAction $value
     * @psalm-param ProductRemoveFromCategoryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRemoveFromCategoryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemoveFromCategoryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemoveFromCategoryAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRemoveFromCategoryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRemoveFromCategoryAction $data */
                $data = ProductRemoveFromCategoryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
