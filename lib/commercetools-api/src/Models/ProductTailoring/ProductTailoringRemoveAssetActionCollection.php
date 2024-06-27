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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringRemoveAssetAction>
 * @method ProductTailoringRemoveAssetAction current()
 * @method ProductTailoringRemoveAssetAction end()
 * @method ProductTailoringRemoveAssetAction at($offset)
 */
class ProductTailoringRemoveAssetActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringRemoveAssetAction $value
     * @psalm-param ProductTailoringRemoveAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringRemoveAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringRemoveAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringRemoveAssetAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringRemoveAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringRemoveAssetAction $data */
                $data = ProductTailoringRemoveAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
