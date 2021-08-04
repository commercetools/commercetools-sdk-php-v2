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
 * @extends ProductUpdateActionCollection<ProductLegacySetSkuAction>
 * @method ProductLegacySetSkuAction current()
 * @method ProductLegacySetSkuAction end()
 * @method ProductLegacySetSkuAction at($offset)
 */
class ProductLegacySetSkuActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductLegacySetSkuAction $value
     * @psalm-param ProductLegacySetSkuAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductLegacySetSkuActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductLegacySetSkuAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductLegacySetSkuAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductLegacySetSkuAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductLegacySetSkuAction $data */
                $data = ProductLegacySetSkuActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
