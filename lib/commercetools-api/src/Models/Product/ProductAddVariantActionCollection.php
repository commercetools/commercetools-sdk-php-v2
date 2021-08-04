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
 * @extends ProductUpdateActionCollection<ProductAddVariantAction>
 * @method ProductAddVariantAction current()
 * @method ProductAddVariantAction end()
 * @method ProductAddVariantAction at($offset)
 */
class ProductAddVariantActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductAddVariantAction $value
     * @psalm-param ProductAddVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductAddVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddVariantAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductAddVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductAddVariantAction $data */
                $data = ProductAddVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
