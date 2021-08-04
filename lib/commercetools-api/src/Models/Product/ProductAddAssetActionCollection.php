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
 * @extends ProductUpdateActionCollection<ProductAddAssetAction>
 * @method ProductAddAssetAction current()
 * @method ProductAddAssetAction at($offset)
 */
class ProductAddAssetActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductAddAssetAction $value
     * @psalm-param ProductAddAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductAddAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddAssetAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductAddAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductAddAssetAction $data */
                $data = ProductAddAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
