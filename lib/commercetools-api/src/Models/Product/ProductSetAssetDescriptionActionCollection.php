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
 * @extends ProductUpdateActionCollection<ProductSetAssetDescriptionAction>
 * @method ProductSetAssetDescriptionAction current()
 * @method ProductSetAssetDescriptionAction end()
 * @method ProductSetAssetDescriptionAction at($offset)
 */
class ProductSetAssetDescriptionActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetAssetDescriptionAction $value
     * @psalm-param ProductSetAssetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetAssetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetAssetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetAssetDescriptionAction $data */
                $data = ProductSetAssetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
