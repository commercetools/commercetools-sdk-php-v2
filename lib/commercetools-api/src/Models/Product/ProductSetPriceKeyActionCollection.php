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
 * @extends ProductUpdateActionCollection<ProductSetPriceKeyAction>
 * @method ProductSetPriceKeyAction current()
 * @method ProductSetPriceKeyAction end()
 * @method ProductSetPriceKeyAction at($offset)
 */
class ProductSetPriceKeyActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetPriceKeyAction $value
     * @psalm-param ProductSetPriceKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetPriceKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetPriceKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetPriceKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetPriceKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetPriceKeyAction $data */
                $data = ProductSetPriceKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
