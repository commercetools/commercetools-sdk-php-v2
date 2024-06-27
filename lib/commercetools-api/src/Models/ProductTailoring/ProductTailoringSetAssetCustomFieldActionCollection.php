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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetAssetCustomFieldAction>
 * @method ProductTailoringSetAssetCustomFieldAction current()
 * @method ProductTailoringSetAssetCustomFieldAction end()
 * @method ProductTailoringSetAssetCustomFieldAction at($offset)
 */
class ProductTailoringSetAssetCustomFieldActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetAssetCustomFieldAction $value
     * @psalm-param ProductTailoringSetAssetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetAssetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetAssetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetAssetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetAssetCustomFieldAction $data */
                $data = ProductTailoringSetAssetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
