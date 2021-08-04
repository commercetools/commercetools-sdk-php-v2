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
 * @extends ProductUpdateActionCollection<ProductSetPricesAction>
 * @method ProductSetPricesAction current()
 * @method ProductSetPricesAction end()
 * @method ProductSetPricesAction at($offset)
 */
class ProductSetPricesActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetPricesAction $value
     * @psalm-param ProductSetPricesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetPricesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetPricesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetPricesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetPricesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetPricesAction $data */
                $data = ProductSetPricesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
