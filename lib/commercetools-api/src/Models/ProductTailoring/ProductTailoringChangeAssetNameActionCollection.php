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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringChangeAssetNameAction>
 * @method ProductTailoringChangeAssetNameAction current()
 * @method ProductTailoringChangeAssetNameAction end()
 * @method ProductTailoringChangeAssetNameAction at($offset)
 */
class ProductTailoringChangeAssetNameActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringChangeAssetNameAction $value
     * @psalm-param ProductTailoringChangeAssetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringChangeAssetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringChangeAssetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringChangeAssetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringChangeAssetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringChangeAssetNameAction $data */
                $data = ProductTailoringChangeAssetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
