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
 * @extends ProductUpdateActionCollection<ProductSetAssetTagsAction>
 * @method ProductSetAssetTagsAction current()
 * @method ProductSetAssetTagsAction end()
 * @method ProductSetAssetTagsAction at($offset)
 */
class ProductSetAssetTagsActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetAssetTagsAction $value
     * @psalm-param ProductSetAssetTagsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetAssetTagsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetTagsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetTagsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetAssetTagsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetAssetTagsAction $data */
                $data = ProductSetAssetTagsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
