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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetAssetCustomTypeAction>
 * @method ProductTailoringSetAssetCustomTypeAction current()
 * @method ProductTailoringSetAssetCustomTypeAction end()
 * @method ProductTailoringSetAssetCustomTypeAction at($offset)
 */
class ProductTailoringSetAssetCustomTypeActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetAssetCustomTypeAction $value
     * @psalm-param ProductTailoringSetAssetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetAssetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetAssetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetAssetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetAssetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetAssetCustomTypeAction $data */
                $data = ProductTailoringSetAssetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
