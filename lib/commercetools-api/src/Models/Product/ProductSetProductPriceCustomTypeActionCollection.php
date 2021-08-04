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
 * @extends ProductUpdateActionCollection<ProductSetProductPriceCustomTypeAction>
 * @method ProductSetProductPriceCustomTypeAction current()
 * @method ProductSetProductPriceCustomTypeAction at($offset)
 */
class ProductSetProductPriceCustomTypeActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetProductPriceCustomTypeAction $value
     * @psalm-param ProductSetProductPriceCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetProductPriceCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetProductPriceCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetProductPriceCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetProductPriceCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetProductPriceCustomTypeAction $data */
                $data = ProductSetProductPriceCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
