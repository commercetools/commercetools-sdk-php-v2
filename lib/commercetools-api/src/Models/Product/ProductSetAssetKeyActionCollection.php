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
 * @extends ProductUpdateActionCollection<ProductSetAssetKeyAction>
 * @method ProductSetAssetKeyAction current()
 * @method ProductSetAssetKeyAction end()
 * @method ProductSetAssetKeyAction at($offset)
 */
class ProductSetAssetKeyActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetAssetKeyAction $value
     * @psalm-param ProductSetAssetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetAssetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetAssetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetAssetKeyAction $data */
                $data = ProductSetAssetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
