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
 * @extends ProductUpdateActionCollection<ProductSetSkuAction>
 * @method ProductSetSkuAction current()
 * @method ProductSetSkuAction at($offset)
 */
class ProductSetSkuActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetSkuAction $value
     * @psalm-param ProductSetSkuAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetSkuActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetSkuAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetSkuAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetSkuAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetSkuAction $data */
                $data = ProductSetSkuActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
