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
 * @extends ProductUpdateActionCollection<ProductSetProductPriceCustomFieldAction>
 * @method ProductSetProductPriceCustomFieldAction current()
 * @method ProductSetProductPriceCustomFieldAction at($offset)
 */
class ProductSetProductPriceCustomFieldActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetProductPriceCustomFieldAction $value
     * @psalm-param ProductSetProductPriceCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetProductPriceCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetProductPriceCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetProductPriceCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetProductPriceCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetProductPriceCustomFieldAction $data */
                $data = ProductSetProductPriceCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
