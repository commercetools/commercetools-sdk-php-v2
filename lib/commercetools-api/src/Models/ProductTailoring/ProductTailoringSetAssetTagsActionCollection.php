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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetAssetTagsAction>
 * @method ProductTailoringSetAssetTagsAction current()
 * @method ProductTailoringSetAssetTagsAction end()
 * @method ProductTailoringSetAssetTagsAction at($offset)
 */
class ProductTailoringSetAssetTagsActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetAssetTagsAction $value
     * @psalm-param ProductTailoringSetAssetTagsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetAssetTagsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetAssetTagsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetAssetTagsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetAssetTagsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetAssetTagsAction $data */
                $data = ProductTailoringSetAssetTagsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
