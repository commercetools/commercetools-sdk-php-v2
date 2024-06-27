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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetAssetSourcesAction>
 * @method ProductTailoringSetAssetSourcesAction current()
 * @method ProductTailoringSetAssetSourcesAction end()
 * @method ProductTailoringSetAssetSourcesAction at($offset)
 */
class ProductTailoringSetAssetSourcesActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetAssetSourcesAction $value
     * @psalm-param ProductTailoringSetAssetSourcesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetAssetSourcesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetAssetSourcesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetAssetSourcesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetAssetSourcesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetAssetSourcesAction $data */
                $data = ProductTailoringSetAssetSourcesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
