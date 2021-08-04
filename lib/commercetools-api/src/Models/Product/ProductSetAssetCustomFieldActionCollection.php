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
 * @extends ProductUpdateActionCollection<ProductSetAssetCustomFieldAction>
 * @method ProductSetAssetCustomFieldAction current()
 * @method ProductSetAssetCustomFieldAction end()
 * @method ProductSetAssetCustomFieldAction at($offset)
 */
class ProductSetAssetCustomFieldActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetAssetCustomFieldAction $value
     * @psalm-param ProductSetAssetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetAssetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetAssetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetAssetCustomFieldAction $data */
                $data = ProductSetAssetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
