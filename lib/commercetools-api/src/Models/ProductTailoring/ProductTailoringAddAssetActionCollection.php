<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\ProductTailoring\ProductTailoringUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringAddAssetAction>
 * @method ProductTailoringAddAssetAction current()
 * @method ProductTailoringAddAssetAction end()
 * @method ProductTailoringAddAssetAction at($offset)
 */
class ProductTailoringAddAssetActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringAddAssetAction $value
     * @psalm-param ProductTailoringAddAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringAddAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringAddAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringAddAssetAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringAddAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringAddAssetAction $data */
                $data = ProductTailoringAddAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
