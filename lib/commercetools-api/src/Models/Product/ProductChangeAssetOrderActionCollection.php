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
 * @extends ProductUpdateActionCollection<ProductChangeAssetOrderAction>
 * @method ProductChangeAssetOrderAction current()
 * @method ProductChangeAssetOrderAction at($offset)
 */
class ProductChangeAssetOrderActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductChangeAssetOrderAction $value
     * @psalm-param ProductChangeAssetOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductChangeAssetOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductChangeAssetOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductChangeAssetOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductChangeAssetOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductChangeAssetOrderAction $data */
                $data = ProductChangeAssetOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
