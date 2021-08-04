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
 * @extends ProductUpdateActionCollection<ProductSetProductVariantKeyAction>
 * @method ProductSetProductVariantKeyAction current()
 * @method ProductSetProductVariantKeyAction end()
 * @method ProductSetProductVariantKeyAction at($offset)
 */
class ProductSetProductVariantKeyActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetProductVariantKeyAction $value
     * @psalm-param ProductSetProductVariantKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetProductVariantKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetProductVariantKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetProductVariantKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetProductVariantKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetProductVariantKeyAction $data */
                $data = ProductSetProductVariantKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
