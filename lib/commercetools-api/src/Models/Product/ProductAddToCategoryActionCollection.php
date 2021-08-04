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
 * @extends ProductUpdateActionCollection<ProductAddToCategoryAction>
 * @method ProductAddToCategoryAction current()
 * @method ProductAddToCategoryAction end()
 * @method ProductAddToCategoryAction at($offset)
 */
class ProductAddToCategoryActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductAddToCategoryAction $value
     * @psalm-param ProductAddToCategoryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductAddToCategoryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddToCategoryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddToCategoryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductAddToCategoryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductAddToCategoryAction $data */
                $data = ProductAddToCategoryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
