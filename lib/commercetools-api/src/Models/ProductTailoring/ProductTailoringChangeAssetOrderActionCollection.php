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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringChangeAssetOrderAction>
 * @method ProductTailoringChangeAssetOrderAction current()
 * @method ProductTailoringChangeAssetOrderAction end()
 * @method ProductTailoringChangeAssetOrderAction at($offset)
 */
class ProductTailoringChangeAssetOrderActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringChangeAssetOrderAction $value
     * @psalm-param ProductTailoringChangeAssetOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringChangeAssetOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringChangeAssetOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringChangeAssetOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringChangeAssetOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringChangeAssetOrderAction $data */
                $data = ProductTailoringChangeAssetOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
