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
 * @extends ProductUpdateActionCollection<ProductSetDefaultVariantAction>
 * @method ProductSetDefaultVariantAction current()
 * @method ProductSetDefaultVariantAction end()
 * @method ProductSetDefaultVariantAction at($offset)
 */
class ProductSetDefaultVariantActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetDefaultVariantAction $value
     * @psalm-param ProductSetDefaultVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetDefaultVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetDefaultVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetDefaultVariantAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetDefaultVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetDefaultVariantAction $data */
                $data = ProductSetDefaultVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
