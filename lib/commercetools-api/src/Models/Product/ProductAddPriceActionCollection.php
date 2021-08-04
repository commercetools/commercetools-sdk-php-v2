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
 * @extends ProductUpdateActionCollection<ProductAddPriceAction>
 * @method ProductAddPriceAction current()
 * @method ProductAddPriceAction at($offset)
 */
class ProductAddPriceActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductAddPriceAction $value
     * @psalm-param ProductAddPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductAddPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddPriceAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductAddPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductAddPriceAction $data */
                $data = ProductAddPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
