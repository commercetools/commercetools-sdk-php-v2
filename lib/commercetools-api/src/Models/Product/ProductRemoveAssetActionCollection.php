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
 * @extends ProductUpdateActionCollection<ProductRemoveAssetAction>
 * @method ProductRemoveAssetAction current()
 * @method ProductRemoveAssetAction end()
 * @method ProductRemoveAssetAction at($offset)
 */
class ProductRemoveAssetActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductRemoveAssetAction $value
     * @psalm-param ProductRemoveAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRemoveAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemoveAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemoveAssetAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductRemoveAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRemoveAssetAction $data */
                $data = ProductRemoveAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
